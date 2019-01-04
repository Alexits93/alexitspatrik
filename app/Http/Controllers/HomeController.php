<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Barryvdh\DomPDF\Facade as PDF;

class HomeController extends Controller
{
    public function index(){

        $portfolio = Cache::remember('portfolio',60,function(){
            return Portfolio::orderBy('sort')->get();
        });

        $social = Cache::remember('social',60,function(){
            return Social::orderBy('sort')->get();
        });

        $settings = Cache::remember('personal_data',60,function(){
            return Setting::findOrfail(1);
        });

        return view('home', compact('portfolio', 'social', 'settings'));
    }

    public function cv(Request $request){
        $portfolio = Cache::remember('portfolio',60,function(){
            return Portfolio::orderBy('sort')->get();
        });

        $social = Cache::remember('social',60,function(){
            return Social::orderBy('sort')->get();
        });

        $settings = Cache::remember('personal_data',60,function(){
            return Setting::findOrfail(1);
        });

        $data = [
            'portfolio' => $portfolio,
            'social' => $social,
            'settings' => $settings
        ];

        $pdf = PDF::loadView('pdf.alexitspatrik_cv', $data);
        return $pdf->stream('alexitspatrik_cv.pdf');
    }
}
