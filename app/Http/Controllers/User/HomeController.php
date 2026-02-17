<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Formation;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*===========================================
    HOME PAGE VIEW PAGE
    ===========================================*/
    public function index()
    {

        $about = About::where('id', 1)->first();
        $services = Service::latest()->get();
        $skills = Skill::orderBy('name', 'ASC')->get();
        $projects = Project::orderBy('top', 'DESC')->limit(4)->get();
        $formations = Formation::latest()->get();
        $categories = Category::whereIn('id', [1, 2, 5])
            ->orderBy('others', 'ASC')
            ->get();
        return view('project.home.welcome', compact('about', 'services', 'projects', 'formations', 'skills', 'categories'));
    } //End Method

    public function ProjectList()
    {
        $services = Service::latest()->get();
        $about = About::where('id', 1)->first();
        $projects = Project::orderBy('top', 'DESC')->get();
        $formations = Formation::latest()->get();
        $categories = Category::whereIn('id', [1, 2, 5])
            ->orderBy('others', 'ASC')
            ->get();
        return view('project.category.list', compact('about', 'projects', 'formations', 'categories', 'services'));
    }

    public function ProjectCategory($id)
    {
        $category = Category::where('id', $id)->first();
        $projects = Project::where('category_id', $id)->orderBy('id', 'DESC')->get();
        $services = Service::latest()->get();
        $skills = Skill::orderBy('name', 'ASC')->get();

        $formations = Formation::latest()->get();
        if ($id == 4) {
            return view('frontend.category.maintenance', compact('services', 'projects', 'formations', 'skills', 'category'));
        } elseif ($id == 3) {
            return view('frontend.category.infographie', compact('services', 'projects', 'formations', 'skills', 'category'));
        } else {
            return view('project.category.category', compact('services', 'projects', 'formations', 'skills', 'category'));
        }
    } //End Method

    public function ProjectDetail($id)
    {
        $about = About::where('id', 1)->first();
        $services = Service::latest()->get();
        $skills = Skill::orderBy('name', 'ASC')->get();
        $projects = Project::orderBy('id', 'DESC')->get();
        $formations = Formation::latest()->get();
        $project = Project::where('id', $id)->first();

        return view('project.category.project_detail', compact('project', 'formations', 'skills', 'services', 'projects'));
    }

    public function ctrStoreContactMessage(Request $request)
    {

        if (empty($request->name) && empty($request->email) && empty($request->phone) && empty($request->subject) && empty($request->message)) {
            return response()->json(['error' => 'Veuillez remplir tous les champs']);
        } else {

            $item = Contact::create([

                'name'       => $request->name,
                'email'      => $request->email,
                'phone'      => $request->phone,
                'subject'    => $request->subject,
                'service'    => $request->service,
                'message'    => $request->message,
                'created_at' => now(),
            ]);

            $notification = array(
                'message' => 'Message envoyé avec succès',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    } //End Method

}
