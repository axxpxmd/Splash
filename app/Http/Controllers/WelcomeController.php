<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Models\post;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
