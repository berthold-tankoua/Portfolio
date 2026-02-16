<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Image;

class SkillController extends Controller
{
    public function SkillList(){
        return Skill::all();
    }

    public function SkillStore(Request $request){

        $request->validate([
            'name'=>'required',
            'icon'=>'required',
            'desc'=>'required',
            'exp'=>'required',
            ],[
                'name'=>'Saisir un nom',
                'icon'=>'Saisir une icone',
                'desc'=>'Saisir une desc',
                'exp'=>'Saisir le nombre d annee',
            ]);
            if ($request->file('image')) {
                $img = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(50,50)->save('upload/skills/'.$name_gen);
                $save_url_1 = 'upload/skills/'.$name_gen;
            }
            if ($request->file('certif')) {
                $img = $request->file('certif');
                $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->save('upload/certifs/'.$name_gen);
                $save_url_2 = 'upload/certifs/'.$name_gen;
            }else {
                    $save_url_2='upload/no_img.jpg';
            }
    
            Skill::insert([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ','-',$request->name)),
                'icon' => $request->icon,
                'certif' => $save_url_2,
                'certif_url'=> config('app.url').$save_url_2,
                'image' => $save_url_1,
                'img_url'=> config('app.url').$save_url_1,
                'desc' => $request->desc,
                'exp' => $request->exp,
            ]);

        return response('Inserer avec success');
    }

    public function SkillEdit($id){
        return Skill::findorfail($id);
    }

    public function SkillUpdate(Request $request, $id){

        if ($request->file('image')) {
            $img = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(50,50)->save('upload/skills/'.$name_gen);
            $save_url_1 = 'upload/skills/'.$name_gen;
        }else {
            $save_url_1 = $request->old_img;
        }
        if ($request->file('certif')) {
            $img = $request->file('certif');
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->save('upload/certifs/'.$name_gen);
            $save_url_2 = 'upload/certifs/'.$name_gen;
        }else {
            $save_url_2 = $request->old_certif;
        }

        Skill::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'icon' => $request->icon,
            'certif' => $save_url_2,
            'certif_url'=> config('app.url').$save_url_2,
            'image' => $save_url_1,
            'img_url'=> config('app.url').$save_url_1,
            'desc' => $request->desc,
            'exp' => $request->exp,
        ]);

        return response('Modification reussi');
    }

    public function SkillDelete($id){
        $delete = Skill::findOrFail($id);
        @unlink($delete->image);
       Skill::findorfail($id)->delete;
       return response('supprime');
    }
    
}
