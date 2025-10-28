<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Main;
use App\Models\protfolio;
use Illuminate\Http\Request;
use App\Models\Service;
class pagesController extends Controller
{
    //

    public function home(){

        $main=Main::first();
        $service= Service::all();
        $protfolio = protfolio::all();
        $about = About::all();

        return view('pages.home',compact('main','service','protfolio','about'));

    
    }

    public function layout(){
        return view('pages.layout');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

  
}
