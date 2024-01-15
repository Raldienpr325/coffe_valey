<?php

namespace App\Http\Controllers;


use App\Models\Bean;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function user_home()
    {
        return view('home.index');
    }

    public function user_catalog()
    {
        $data = Bean::all();
        return view('catalog.index',compact('data'));
    }


    public function user_upload()
    {
        return view('upload.index');
    }
}
