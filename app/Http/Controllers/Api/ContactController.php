<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function ContactStore(Request $request){
        $request->validate([
         'name'=>'required',
         'email'=>'required',
        ],[
           'name.required'=>'Saisir votre Nom',
           'email.required'=>'Saisir votre adresse Mail',
        ]);
          Contact::insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'objet' => $request->objet,
                'message' => $request->message,
                'created_at' => Carbon::now()
            ]);
        return response()->json(['success'=> 'Votre message a bien été envoyé']);
    } //End Method
}
