<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
      //
      public function PricingView(){
        $pricings = Pricing::all();
        $categories = Category::latest()->get();
        return view('pages.pricing.pricing',compact('pricings','categories'));
    }

    public function PricingStore(Request $request){

        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            ],[
                'name'=>'Saisir un nom',
                'category_id'=>'Selectionner une categorie',
        ]);

            Pricing::insert([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'advantage' => $request->advantage,
                'price' => $request->price,
                'desc' => $request->desc,
                'msg_txt' => $request->msg_txt,
                'disadvantage' => $request->disadvantage,
            ]);
        $notification = array(
            'message' =>'Prix ajoute',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }
    
    public function PricingEdit($id){
        $item = Pricing::findorfail($id);
        return view('pages.pricing.pricing_edit',compact('item'));
    }

    public function PricingUpdate(Request $request){

        $id = $request->id;

        Pricing::findOrFail($id)->update([
            'name' => $request->name,
            'advantage' => $request->advantage,
            'price' => $request->price,
            'desc' => $request->desc,
            'msg_txt' => $request->msg_txt,
            'disadvantage' => $request->disadvantage,
        ]);

        $notification = array(
            'message' =>'Prix mis a jour',
            'alert-type'=>'success'
        );

        return redirect()->route('formation.list')->with($notification);
    }
}
