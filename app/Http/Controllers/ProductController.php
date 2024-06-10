<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $users = product::all();  
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = product::findOrFail($id);  
        return view('users.show', compact('user'));
    }
    //
}
