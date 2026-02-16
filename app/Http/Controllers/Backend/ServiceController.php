<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
      //
    public function ServiceView(){
        $services = Service::all();
        return view('pages.service.service',compact('services'));
    }

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

        return redirect()->back()->with($notification);
    }
    
    public function ServiceEdit($id){
        $item = Service::findorfail($id);
        return view('pages.service.service_edit',compact('item'));
    }

    public function ServiceUpdate(Request $request){

        $id = $request->id;
        Service::findOrFail($id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' =>'Competence mise a jour',
            'alert-type'=>'success'
        );

        return redirect()->route('service.list')->with($notification);
    }
}
