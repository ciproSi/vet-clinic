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

    public function  show($id){

     
        //use model to get id from database 
        
        $owner = Owner::with('pets')->findOrFail($id);
        
        return view('owners.owner', compact('owner'));
    }


    public function delete()
    {
        
    }

    public function search(Request $request)
    {
        $search = '%' . $request->input('surname') . '%';

        $owners = Owner::with('pets')->where('surname', 'like', $search)->get();

        if ($owners->count() == 0) {
            return redirect('/')->with('flash_message', 'Pet owner not found. Try different');    
        } else {
            return view('owners.search-result', compact('owners'));
        }
        
    }

}
