<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Database\Eloquent\Model;
use App\Models\Pets;
use App\Models\Owner;


class OwnerController extends Controller
{
    //
    public function index()
    {
        
        $owners = Owner::with('pets')->get();

        return view('owners/index', compact('owners'));
    }

    public function create()
    {
        return view('owners/create');
    }

    public function store(Request $request)
    {
        
        $owner        = new Owner;
        $owner->name  = $request->input('name');
        $owner->surname  = $request->input('surname');
        $owner->city  = $request->input('city');
        $owner->street  = $request->input('street');
        $owner->phone  = $request->input('phone');
        $owner->email  = $request->input('email');

        $owner->save();

        //after storing new book we will redirect our user to action('BookController@index')
        return redirect(action('OwnerController@index'));


    }

    public function  show($id){

     
        //use model to get id from database 
        
        $owner = Owner::with('pets')->findOrFail($id);
        


        return view('owners.owner',compact('owner'));
    }


    public function delete()
    {
        
    }



}
