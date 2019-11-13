<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Models\post;

class WelcomeController extends Controller
{
    public function index()
    {
        $photo = post::select('photo', 'caption', 'user_id')->get();
        return view('welcome', compact('photo'));
    }
}
