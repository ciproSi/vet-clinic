<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;


class Pets extends Controller
{
    //
    public function index(){
        $bookshops = Pets::get();
        return view('pets/index', compact('bookshops'));
    }
    public function create(){
        return view('pets/create');
    }

}