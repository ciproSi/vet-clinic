<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index()
    {
        
        $owners = Owner::with('pets')->get();

        return view('owners/index', compact('owners'));
    }

    public function create()
    {
        return view('owners/create');
    }
}
