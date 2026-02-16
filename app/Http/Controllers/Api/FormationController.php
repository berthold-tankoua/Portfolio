<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;
use Image;

class FormationController extends Controller
{      //
    public function FormationList(){
        $formations = Formation::all();
        return  $formations;
    }

    public function FormationStore(Request $request){

        $request->validate([
            'name'=>'required',
            'duration'=>'required',
            ],[
                'name'=>'Saisir un nom',
                'duration'=>'Saisir le nombre d annee',
        ]);
            if ($request->file('image')) {
                $img = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->save('upload/formations/'.$name_gen);
                $save_url = 'upload/formations/'.$name_gen;
            }else {
                $save_url=null;
            }

            Formation::insert([
                'name' => $request->name,
                'image' => $save_url,
                'img_url'=> config('app.url').$save_url,
                'duration' => $request->duration,
            ]);
            
        return response('ajouter');
    }
    
    public function FormationEdit($id){
        $item = Formation::findorfail($id);
        return view('pages.formation.formation_edit',compact('item'));
    }

    public function FormationUpdate(Request $request, $id){

        if ($request->file('image')) {
            $img = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->save('upload/formations/'.$name_gen);
            $save_url = 'upload/formations/'.$name_gen;
        }else {
            $save_url = $request->old_image;
        }

        Formation::findOrFail($id)->update([
            'name' => $request->name,
            'image' => $save_url,
            'img_url'=> config('app.url').$save_url,
            'duration' => $request->duration,
        ]);

        return response('modifier');
    }

    public function FormationDelete($id){
        $delete = Formation::findOrFail($id);
        @unlink($delete->image);
       Formation::findorfail($id)->delete;
       return response('supprime');
    }
}
