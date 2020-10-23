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

        return view('pets.create');

    }

    public function search(Request $request)
    {
        $search = '%' . $request->input('pet') . '%';

        $pets = Pet::with('owner')->where('name', 'like', $search)->get();

        if ($pets->count() == 0) {
            return redirect('/')->with('flash_message', 'Pet not found. Try different...');    
        } else {
            return view('pets.search-result', compact('pets'));
        }
        
    }

}