<?php

namespace App\Http\Controllers;

use App\Models\skin_problem;
use Illuminate\Http\Request;

class SkinProblemController extends Controller
{
    public function index()
    {
        $users = skin_problem::all();  
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = skin_problem::findOrFail($id);  
        return view('users.show', compact('user'));
    }
    //
}
