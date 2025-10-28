<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\protfolio;

class ProtfolioPageController extends Controller
{
    public function protfolio(){
        return view('pages.Profoliopage.protfolio');
    }
    public function create(){

    

    return view('pages.Profoliopage.protfolio_create');
}

public function stor(Request $request){

    $this->validate($request,[
        'title'=>'required|string',
        'sub_title'=>'required|string',
        'big_image'=>'required',
        'small_image'=>'required',
        'description'=>'required',
        'client'=>'required|string',
        'category'=>'required|string'
       ]);


       $protfolio= new protfolio();

        $protfolio->title=$request->title;
        $protfolio->sub_title=$request->sub_title;
        $protfolio->description=$request->description;
        $protfolio->client=$request->client;
        $protfolio->category=$request->category;


           $big_file = $request->file('big_image');
          Storage::putFile('public/img/', $big_file);
         $protfolio->big_image = "storage/img/".$big_file->hashName();

        $small_file = $request->file('small_image');
        Storage::putFile('public/img/', $small_file);
        $protfolio->small_image = "storage/img/".$small_file->hashName();

         $protfolio->save();





        
        
        return redirect()->route('protfolio.create')->with('success',"main page data hass been successfuly");

}

public function list(){

    $protfolio=protfolio::all();
    return view('pages.Profoliopage.protfolio_list',compact('protfolio'));
}

public function edit($id){

    $protfolio= protfolio::find($id);
    return view('pages.Profoliopage.edit',compact('protfolio'));
}

    public function updates(Request $request, $id){
        $this->validate($request,[
        'title'=>'required|string',
        'sub_title'=>'required|string',
        'big_image'=>'required',
        'small_image'=>'required',
         'description'=>'required',
        'client'=>'required|string',
        'category'=>'required|string'
       ]);


       $protfolio= protfolio::find($id);

        $protfolio->title=$request->title;
        $protfolio->sub_title=$request->sub_title;
        $protfolio->description=$request->description;
        $protfolio->client=$request->client;
        $protfolio->category=$request->category;
        
        
        if( $request->file('big_image')){
            $big_file = $request->file('big_image');
               Storage::putFile('public/img/', $big_file);
         $protfolio->big_image = "storage/img/".$big_file->hashName();

        }
        
        if(   $small_file = $request->file('small_image')){

               Storage::putFile('public/img/', $small_file);
               $protfolio->small_image = "storage/img/".$small_file->hashName();


        }
       

     
          $protfolio->save();
         
        
        return redirect()->route('protfolio.list')->with('success',"main page data hass been update successfuly");
    }

    public function distroy($id){
        $portfolio = protfolio::find($id);
        // @unlink(public_path($portfolio->big_image));
        // @unlink(public_path($portfolio->small_image));
        $portfolio->delete();
         return redirect()->route('protfolio.list')->with('success','protfolio data has been deleted successfully');
    }

}

