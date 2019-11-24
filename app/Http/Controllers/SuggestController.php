<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class SuggestController extends Controller
{
    public function index()
    {
        $users = users::all();
        return view('Page.suggest', compact('users'));
    }
}
