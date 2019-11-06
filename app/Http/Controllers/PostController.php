<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

// Models
use App\Models\post;

class PostController extends Controller
{
    // Store
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validation->passes()) {

            $upload = new post();
            $upload->caption = $request->get('caption');
            $upload['user_id'] = Auth::user()->id;

            $file     = $request->file('photo');
            $fileName = time().".".$file->getClientOriginalName();
            $request->file('photo')->move("post/", $fileName);

            $upload->photo = $fileName;
            $upload->save();

            return response()->json([
                'class_name'  => 'alert-success',
                'message'     => 'Image Upload Successfully',
            ]);
        } else {
            return response()->json([
                'message'     => $validation->errors()->all(),
                'class_name'  => 'alert-danger',
            ]);
        }
       
    }
}
