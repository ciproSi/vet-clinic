<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;


class PetController extends Controller
{
    //
    public function index(){
        
        $pets = Pet::with('owner')->get();
        
        return view('pets/index', compact('pets'));
    }
    
    public function show ($id)
    {
        $pet = Pet::with('owner')->findOrfail($id);
        
        
        return view('pets.show', compact('pet'));
    }

    public function create(Request $request)
    {


        $pet = new Pet ;
        
            $pet->name    = $request->input('name'); 
            $pet->breed   = $request->input('breed'); 
            $pet->species = $request->input('species'); 
            $pet->image   = $request->input('image'); 
            $pet->weight  = $request->input('weight'); 
            $pet->age     = $request->input('age'); 
            $pet->owner_id= $request->input('owner_id'); 

        $pet->save();

        //after storing new book we will redirect our user to action('BookController@index')
        // return redirect(action('PetController@'));
           
      

    }

    public function store()
    {

    }

}