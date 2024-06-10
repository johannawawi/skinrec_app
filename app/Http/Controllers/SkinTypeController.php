<?php

namespace App\Http\Controllers;

use App\Models\skintype;
use Illuminate\Http\Request;

class SkinTypeController extends Controller
{
    public function index()
    {
        $users = skintype::all();  
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = skintype::findOrFail($id);  
        return view('users.show', compact('user'));
    }
    //
}
