<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Image;

class SubCategoryController extends Controller
{

    /*===========================================
    SUBCATEGORY PAGE VIEW PAGE
    ===========================================*/

    public function ctrSubCategoryView(){
        $categories = Category::orderBy('name','ASC')->get();
        $subcategories = SubCategory::latest()->get();
        return view('pages.subcategory.subcategory_view',compact('subcategories','categories'));
    } //End Method

    /*===========================================
    ADD SUBCATEGORY 
    ===========================================*/

    public function ctrSubCategoryStore(Request $request){

        $request->validate([
         'id'=>'required',
         'name'=>'required',

        ],[
           'id.required'=>'select category',
           'name.required'=>'input  Name',

        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(52,52)->save('upload/subcategories/'.$name_gen);
            $save_url = 'upload/subcategories/'.$name_gen;
        }else{
            $save_url = 'upload/no_img.jpg';
        }

        SubCategory::insert([
           'category_id'=>$request->id,
           'name'=>$request->name,
           'slug' => strtolower(str_replace(' ','-',$request->name)),
           'image'=> $save_url,
           'img_url'=> config('app.url').$save_url,
        ]);

        $notification = array(
         'message' =>'subcategory Inserted Successfully',
         'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);

    } //End Method

    /*===========================================
    EDIT SUBCATEGORY
    ===========================================*/

    public function ctrSubCategoryEdit($id){
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::orderBy('name','ASC')->get();
        return view('pages.subcategory.subcategory_edit',compact('subcategory', 'categories'));
    } //End Method

    /*===========================================
    UPDATE SUBCATEGORY
    ===========================================*/

    public function ctrSubCategoryUpdate(Request $request){

        $old_img = $request->old_img; 
        $id = $request->id;

        if($request->file('image')){

            @unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(52,52)->save('upload/subcategories/'.$name_gen);
            $save_url = 'upload/subcategories/'.$name_gen;
        }

        SubCategory::findOrFail($id)->update([
            'category_id'=>$request->category_id,
            'name'=> $request->name,
            'slug' => strtolower(str_replace(' ','-',$request->name)),
            'image'=> $save_url,
            'img_url'=> config('app.url').$save_url,
        ]);
 
        $notification = array(
            'message' =>'subcategory Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('all.subcategory')->with($notification);
    } //End Method

    /*===========================================
    DELETE SUBCATEGORY
    ===========================================*/

    public function ctrSubCategoryDelete($id){

        SubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' =>'Subcategory Deleted Successfully',
            'alert-type'=>'info'
        );

        return redirect()->route('all.subcategory')->with($notification);
    } //End Method

}
