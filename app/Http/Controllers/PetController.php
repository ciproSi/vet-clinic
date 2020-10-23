<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;


class Pets extends Controller
{
    //
    public function index(){
        $pets = Pets::get();
        return view('pets/index', compact('animals'));
    }
    public function create(){
        return view('pets/create');
    }

}
