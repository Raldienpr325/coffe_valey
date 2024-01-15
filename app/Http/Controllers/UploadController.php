<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        $data = Upload::all();
        return view('upload.index',compact('data'));
    }

    public function create()
    {
        return view('upload.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document_file' => 'required|max:5048',
            'author' => 'required|string|max:255',
        ]);

        // Handle file upload
        if ($request->hasFile('document_file')) {
            $file = $request->file('document_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');

            Upload::create([
                'title' => $request->input('title'),
                'document_file' => $filePath,
                'author' => $request->input('author'),
            ]);

            return redirect()->route('upload.index')->with('success', 'File uploaded successfully');
        }

        return redirect()->back()->with('error', 'File upload failed');
    }
}
