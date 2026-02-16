<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{
    public function ProjectView(){
        $projects = Project::latest()->get();
        return view('pages.project.project_view',compact('projects'));
    } //End Method

    public function ProjectAdd(){
        $categories = Category::latest()->get();
        return view('pages.project.project_add',compact('categories'));
    } //End Method

    /*===========================================
    ADD Project
    ===========================================*/

    public function ProjectStore(Request $request){
 
           $save_url0 = null;   
            if ($request->file('img_perf')) {
                $img_perf = $request->file('img_perf');
                $name_gen0 = hexdec(uniqid()).'.'.$img_perf->getClientOriginalExtension();
                Image::make($img_perf)->save('upload/projects/'.$name_gen0);
                $save_url0 = 'upload/projects/'.$name_gen0;
            }
            $save_url1 = null;
            if ($request->file('image1')) {
                $image1 = $request->file('image1');
                $name_gen1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
                Image::make($image1)->save('upload/projects/'.$name_gen1);
                $save_url1 = 'upload/projects/'.$name_gen1;
            }
            $save_url2 = null;
            if ($request->file('image2')) {
                $image2 = $request->file('image2');
                $name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
                Image::make($image2)->save('upload/projects/'.$name_gen2);
                $save_url2 = 'upload/projects/'.$name_gen2;
            }
            $save_url3 = 'upload/projects/1793579378275286.png';
            if ($request->file('image3')) {
                $image3 = $request->file('image3');
                $name_gen3 = hexdec(uniqid()).'.'.$image3->getClientOriginalExtension();
                Image::make($image3)->save('upload/projects/'.$name_gen3);
                $save_url3 = 'upload/projects/'.$name_gen3;
            }
            $save_url4 = null;
            if ($request->file('image4')) {
                $image4 = $request->file('image4');
                $name_gen4 = hexdec(uniqid()).'.'.$image4->getClientOriginalExtension();
                Image::make($image4)->save('upload/projects/'.$name_gen4);
                $save_url4 = 'upload/projects/'.$name_gen4;
            }

            Project::insert([
                'category_id'=>$request->category_id,
                'tools'=>$request->tools,
                'tool_path'=>$request->tool_path,
                'name'=>$request->name,
                'ytb_link'=>$request->ytb_link,
                'slug'=>strtolower(str_replace(' ','-',$request->name)),
                'img_perf'=>$save_url0,
                'img_perf_url'=>config('app.url').$save_url0,
                'title1'=>$request->title1,
                'desc1'=>$request->desc1,
                'image1'=>$save_url1,
                'img_url1'=>config('app.url').$save_url1,
                'title2'=>$request->title2,
                'desc2'=>$request->desc2,
                'image2'=>$save_url2,
                'img_url2'=>config('app.url').$save_url2,
                'title3'=>$request->title3,
                'desc3'=>$request->desc3,
                'image3'=>$save_url3,
                'img_url3'=>config('app.url').$save_url3,
                'title4'=>$request->title4,
                'desc4'=>$request->desc4,
                'image4'=>$save_url4,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'client_contact'=>$request->client_contact,
                'url'=>$request->url,
                'sub'=>$request->sub,
                'img_url4'=>config('app.url').$save_url4,
                'status'=>$request->status,
            ]);

            $notification = array(
                'message' =>'Projet inserer avec succes',
                'alert-type'=>'success'
            );

        return redirect()->back()->with($notification);
        
    } //End Method

    /*===========================================
    EDIT BRAND
    ===========================================*/

    public function ProjectEdit($id){
        $project = Project::findOrFail($id);
        $categories = Category::latest()->get();
        return view('pages.project.project_edit',compact('project','categories'));
    } //End Method

    public function ProjectUpdate(Request $request){
        $id = $request->id;
        $save_url0 = $request->img0;   
        if ($request->file('img_perf')) {
            @unlink($request->img0);
            $img_perf = $request->file('img_perf');
            $name_gen0 = hexdec(uniqid()).'.'.$img_perf->getClientOriginalExtension();
            Image::make($img_perf)->save('upload/projects/'.$name_gen0);
            $save_url0 = 'upload/projects/'.$name_gen0;
        }
        $save_url1 = $request->img1;
        if ($request->file('image1')) {
            @unlink($request->img1);
            $image1 = $request->file('image1');
            $name_gen1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
            Image::make($image1)->save('upload/projects/'.$name_gen1);
            $save_url1 = 'upload/projects/'.$name_gen1;
        }
        $save_url2 = $request->img2;
        if ($request->file('image2')) {
            @unlink($request->img2);
            $image2 = $request->file('image2');
            $name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
            Image::make($image2)->save('upload/projects/'.$name_gen2);
            $save_url2 = 'upload/projects/'.$name_gen2;
        }
        $save_url3 = $request->img3;
        if ($request->file('image3')) {
            @unlink($request->img3);
            $image3 = $request->file('image3');
            $name_gen3 = hexdec(uniqid()).'.'.$image3->getClientOriginalExtension();
            Image::make($image3)->save('upload/projects/'.$name_gen3);
            $save_url3 = 'upload/projects/'.$name_gen3;
        }
        $save_url4 = $request->img4;
        if ($request->file('image4')) {
            @unlink($request->img4);
            $image4 = $request->file('image4');
            $name_gen4 = hexdec(uniqid()).'.'.$image4->getClientOriginalExtension();
            Image::make($image4)->save('upload/projects/'.$name_gen4);
            $save_url4 = 'upload/projects/'.$name_gen4;
        }

        Project::findOrFail($id)->update([
            'category_id'=>$request->category_id,
            'tools'=>$request->tools,
            'name'=>$request->name,
            'ytb_link'=>$request->ytb_link,
            'slug'=>strtolower(str_replace(' ','-',$request->name)),
            'img_perf'=>$save_url0,
            'img_perf_url'=>config('app.url').$save_url0,
            'title1'=>$request->title1,
            'desc1'=>$request->desc1,
            'image1'=>$save_url1,
            'img_url1'=>config('app.url').$save_url1,
            'title2'=>$request->title2,
            'desc2'=>$request->desc2,
            'image2'=>$save_url2,
            'img_url2'=>config('app.url').$save_url2,
            'title3'=>$request->title3,
            'desc3'=>$request->desc3,
            'image3'=>$save_url3,
            'img_url3'=>config('app.url').$save_url3,
            'title4'=>$request->title4,
            'desc4'=>$request->desc4,
            'image4'=>$save_url4,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'client_contact'=>$request->client_contact,
            'url'=>$request->url,
            'sub'=>$request->sub,
            'img_url4'=>config('app.url').$save_url4,
            'status'=>$request->status,
        ]);

        $notification = array(
            'message' =>'Mise à jour effectuer avec succes',
            'alert-type'=>'info'
        );

        return redirect()->back()->with($notification);

    } //End Method
}
