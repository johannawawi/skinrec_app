<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $users = brand::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = brand::findOrFail($id);  
        return view('users.show', compact('user'));
    }
}
