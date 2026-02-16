<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function ServiceList(){
        $services = Service::all();
        return $services;
    }
    public function ServiceDetail($id){
        $service = Service::findOrFail($id);
        return $service;
    } //End Method
    public function ServiceStore(Request $request){

        $request->validate([
            'name'=>'required',
            ],[
                'name'=>'Saisir un nom',
        ]);

        Service::insert([
            'name' => $request->name,
        ]);
        $notification = array(
            'message' =>'Service ajoutee',
            'alert-type'=>'success'
        );

        return response('Inserer avec success');
    }
    
    public function ServiceEdit($id){
        $item = Service::findorfail($id);
        return view('pages.service.service_edit',compact('item'));
    }

    public function ServiceUpdate(Request $request, $id){

        Service::findOrFail($id)->update([
            'name' => $request->name,
        ]);

        return response('Modifier avec success');
    }
    public function ServiceDelete($id){
        Service::findorfail($id)->delete;
        return response('supprime');
     }
}
