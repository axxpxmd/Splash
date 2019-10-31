<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Models
use App\Models\users;

class ProfilController extends Controller
{
    // Index
    public function index()
    {
        $photo  = users::select('id', 'photo')->whereid(Auth::user()->id)->get();
        return view('Page.profil', compact('photo'));
    }
}
