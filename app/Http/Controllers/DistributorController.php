<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributors;
use Illuminate\Support\Facades\Http;

class DistributorController extends Controller
{
    public function index(){
        $data = Distributors::all();
        return view('distributor.index',compact('data'));
    }

    public function create()
    {
        return view('distributor.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Distributors::create($data);

        return redirect()->route('distributor.index');
    }

    public function edit($id)
    {
        $distributor = Distributors::findorfail($id);
        $countries = Http::get('https://restcountries.com/v3.1/all')->json();
        return view('distributor.edit',compact('distributor','countries'));
    }


    public function update(Request $request, $id)
    {
        $distributor = Distributors::findOrFail($id);

        $distributor->update([
            'name' => $request->input('name'),
            'city' => $request->input('city'),
            'region' => $request->input('region'),
            'country' => $request->input('country'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('distributor.index');
    }


}
