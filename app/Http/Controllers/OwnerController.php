<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //

    public function  show($id){

        // $owner = $request->input('id');

        //use model to get id from database 

       $owner =Owner::findOrFail($id);



        return view('owners/owner', compact('owner'));
    }
}
