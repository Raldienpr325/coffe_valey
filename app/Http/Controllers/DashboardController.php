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
        $data = Bean::with('daily_bean')
                ->whereHas('daily_bean', function ($query) {
                    $query->where('sale_price', '>', 50);
                })
                ->get();
        return view('home.index',compact('data'));
    }

    public function user_catalog()
    {
        $data = Bean::all();
        return view('catalog.index',compact('data'));
    }

}
