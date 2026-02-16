<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function PricingCategory($id){
        $pricings = Pricing::where('category_id',$id)->get();
        return $pricings;
    } //End Method
}
