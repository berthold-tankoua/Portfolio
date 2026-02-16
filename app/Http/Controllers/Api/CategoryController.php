<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryList(){
        $categories = Category::orderby('id','ASC')->get();
        return $categories;
    } //End Method

    public function CategoryDetail($id){
        $category = Category::findOrFail($id);
        return $category;
    } //End Method
    /*===========================================
    ADD CATEGORY
    ===========================================*/

    public function CategoryStore(Request $request){
        $request->validate([
         'name'=>'required',
         'image'=>'required',
        ],[
           'name.required'=>'Input category french name',
           'image.required'=>'Input imagen',
        ]);

        if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(52,52)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::insert([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ','-',$request->name)),
                'image'=> $save_url,
                'img_url'=> config('app.url').$save_url,
                'others'=> $request->top,
                'created_at' => Carbon::now()
            ]);

        }else{
            Category::insert([
                'name' => $request->name,
                'slug' => strtolower(str_replace(' ','-',$request->name)),
                'created_at' => Carbon::now()
            ]);
        }
            return response('Ajouter');

    } //End Method

    /*===========================================
    EDIT CATEGORY
    ===========================================*/

    public function CategoryEdit($id){
        $category = Category::findOrFail($id);
        return $category;
    } //End Method

    /*===========================================
    UPDAPTE CATEGORY
    ===========================================*/

    public function CategoryUpdate(Request $request){
        $id = $request->id;
        $old_img = $request->old_img; 

        $update_category = Category::findorFail($id);
        $update_category->name = $request->name;
        $update_category->slug = strtolower(str_replace(' ','-',$request->name));

        if($request->file('image')){
            @unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(52,52)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;
            $update_category['image'] = $save_url;
            $update_category['img_url'] = config('app.url').$save_url;
        }

        $update_category->save();

        return response('MISE a jour');

    } //End Method

    /*===========================================
    DELETE CATEGORY
    ===========================================*/

    public function CategoryDelete($id){
        $delete_category = Category::findOrFail($id);
        $cat_img = $delete_category->image;
        @unlink($cat_img);
        $delete_category->delete();

        return response('suppprimer');
    } //End Method
}
