<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(){

        $portfolio = Cache::remember('portfolio',60,function(){
            return Portfolio::orderBy('sort')->get();
        });

        return view('home', compact('portfolio'));
    }
}
