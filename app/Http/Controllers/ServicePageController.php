<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;





class ServicePageController extends Controller
{
    public function service(){
        return view('pages.ServicePage.service');
    }

    public function create(){
        return view('pages.ServicePage.service_create');
    }


    public function update(Request $request){
        $this->validate($request,[
        'icon'=>'required|string',
        'title'=>'required|string',
        'description'=>'required'
       ]);


       $service= new Service;

        $service->icon=$request->icon;
        $service->title=$request->title;
       $service->description=$request->description;
        $service->save();
        
        return redirect()->route('service.create')->with('success',"main page data hass been successfuly");

    }



    public function list(){
        $service= Service::all();
        return view('pages.ServicePage.service_list',compact('service'));
    }


    public function edit($id){
        $service= Service::find($id);
       return view('pages.ServicePage.edit',compact('service'));
    }

    public function updates(Request $request, $id){
        $this->validate($request,[
        'icon'=>'required|string',
        'title'=>'required|string',
        'description'=>'required'
       ]);


       $service= Service::find($id);

        $service->icon=$request->icon;
        $service->title=$request->title;
        $service->description=$request->description;
        $service->save();
        
        return redirect()->route('service.list')->with('success',"main page data hass been update successfuly");
    }

    public function distroy($id)
    {
        $service= Service::find($id);
        $service->delete();
        
        return redirect()->route('service.list')->with('success',"main page data hass been update successfuly");


    }
}
