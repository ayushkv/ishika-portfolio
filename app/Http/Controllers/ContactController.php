<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function contact(Request $req){
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:contact,email',
            'message' => 'required',
        ]);

        if($validated){
            $inq = new Contact();
            $inq->name = $req->name;
            $inq->email = $req->email;
            $inq->message = $req->message;
            $inq->save();
            return response()->json([
                'message' => 'Thank you for contacting me!'
            ]);
        }
    }
}
