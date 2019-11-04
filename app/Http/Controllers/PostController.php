<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Models
use App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        return view('Page.post');
    }

    public function store(Request $request)
    {
        $upload            = new post();
        $upload->caption   = $request->get('caption');
        $upload['user_id'] = Auth::user()->id;

        $file     = $request->file('photo');
        $fileName = time().".".$file->getClientOriginalName();
        $request->file('photo')->move("post/", $fileName);

        $upload->photo = $fileName;
        $upload->save();

        return redirect()
            ->route('post.index')
            ->withSuccess('Posted!');
    }
}
