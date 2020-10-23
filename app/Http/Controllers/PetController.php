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

    public function create(){
    }

}