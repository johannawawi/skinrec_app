<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $users = category::all();  
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = category::findOrFail($id);  
        return view('users.show', compact('user'));
    }
    //
}
