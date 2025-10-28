<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\About;

class AboutPagesController extends Controller
{
    public function about(){
        return view('pages.AboutPage.about');
    }

    public function create(){
        return view('pages.AboutPage.create');
    }

    public function stor(Request $request){

                $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string', 
        ]);

        $about = new About;
        $about->title1 = $request->title1;
        $about->title2 = $request->title2;
        $about->description = $request->description;

        $image_file = $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $about->image = "storage/img/".$image_file->hashName();


        
  $about->save();

 return redirect()->route('about.create')->with('success',"main page data hass been successfuly");

    }


    public function list(){
        $about=About::all();
        return view('pages.AboutPage.about_list',compact('about')); 
    
    
    }



        public function edit($id){
            $about = About::find($id);
            return view('pages.AboutPage.edit_about',compact('about')); 
        
        }


        public function updates(Request $request,$id){

            
                $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string', 
        ]);

        $about = About::find($id);
        $about->title1 = $request->title1;
        $about->title2 = $request->title2;
        $about->description = $request->description;
        if( $request->file('image')){
        $image_file = $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $about->image = "storage/img/".$image_file->hashName();
        }



        
  $about->save();

 return redirect()->route('about.list')->with('success',"main page data hass been update successfuly");


        }

        public function distroy($id){
            $about = About::find($id);
            $about->delete();
            return redirect()->route('about.list')->with('success',"main page data hass been successfuly");
        }

}

