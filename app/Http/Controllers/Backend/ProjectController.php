<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Image;

class ProjectController extends Controller
{
    public function ProjectView()
    {
        $projects = Project::latest()->get();
        return view('pages.project.project_view', compact('projects'));
    } //End Method

    public function ProjectAdd()
    {
        $categories = Category::latest()->get();
        return view('pages.project.project_add', compact('categories'));
    } //End Method

    /*===========================================
    ADD Project
    ===========================================*/

    public function ProjectStore(Request $request)
    {

        $save_url0 = null;
        if ($request->file('img_perf')) {
            $img_perf = $request->file('img_perf');
            $name_gen0 = hexdec(uniqid()) . '.' . $img_perf->getClientOriginalExtension();
            Image::make($img_perf)->save('upload/projects/' . $name_gen0);
            $save_url0 = 'upload/projects/' . $name_gen0;
        }
        $save_url1 = null;
        if ($request->file('image1')) {
            $image1 = $request->file('image1');
            $name_gen1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->save('upload/projects/' . $name_gen1);
            $save_url1 = 'upload/projects/' . $name_gen1;
        }

        Project::insert([
            'category_id' => $request->category_id,

            'tool_path' => $request->tool_path,
            'name' => $request->name,
            'ytb_link' => $request->ytb_link,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'img_perf' => $save_url0,

            'title1' => $request->title1,
            'desc1' => $request->desc1,
            'image1' => $save_url1,

            'title2' => $request->title2,
            'desc2' => $request->desc2,

            'title3' => $request->title3,
            'desc3' => $request->desc3,

            'title4' => $request->title4,
            'desc4' => $request->desc4,

            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'client_contact' => $request->client_contact,
            'url' => $request->url,
            'sub' => $request->sub,
            'status' => $request->status,
        ]);

        $notification = array(
            'message' => 'Projet ajouté avec succès',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //End Method

    /*===========================================
    EDIT BRAND
    ===========================================*/

    public function ProjectEdit($id)
    {
        $project = Project::findOrFail($id);
        $categories = Category::latest()->get();
        return view('pages.project.project_edit', compact('project', 'categories'));
    } //End Method

    public function ProjectUpdate(Request $request)
    {
        $id = $request->id;
        $save_url0 = $request->img0;
        if ($request->file('img_perf')) {
            @unlink($request->img0);
            $img_perf = $request->file('img_perf');
            $name_gen0 = hexdec(uniqid()) . '.' . $img_perf->getClientOriginalExtension();
            Image::make($img_perf)->save('upload/projects/' . $name_gen0);
            $save_url0 = 'upload/projects/' . $name_gen0;
        }
        $save_url1 = $request->img1;
        if ($request->file('image1')) {
            @unlink($request->img1);
            $image1 = $request->file('image1');
            $name_gen1 = hexdec(uniqid()) . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->save('upload/projects/' . $name_gen1);
            $save_url1 = 'upload/projects/' . $name_gen1;
        }

        Project::findOrFail($id)->update([
            'category_id' => $request->category_id,

            'name' => $request->name,
            'ytb_link' => $request->ytb_link,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'img_perf' => $save_url0,

            'title1' => $request->title1,
            'desc1' => $request->desc1,
            'image1' => $save_url1,

            'title2' => $request->title2,
            'desc2' => $request->desc2,

            'title3' => $request->title3,
            'desc3' => $request->desc3,

            'title4' => $request->title4,
            'desc4' => $request->desc4,

            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'client_contact' => $request->client_contact,
            'url' => $request->url,
            'sub' => $request->sub,

            'status' => $request->status,
        ]);

        $notification = array(
            'message' => 'Projet mis à jour avec succès',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    } //End Method
}
