<?php

namespace App\Http\Controllers;

use App\Models\notable_effect;
use Illuminate\Http\Request;

class NotableController extends Controller
{
    public function index()
    {
        $users = notable_effect::all();  
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = notable_effect::findOrFail($id);  
        return view('users.show', compact('user'));
    }
    //
}
