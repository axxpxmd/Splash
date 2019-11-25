<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

// Models
use App\Models\users;
use App\Models\post;

class ProfilController extends Controller
{
    // Index
    public function index()
    {
        $photo  = users::select('id', 'photo')->whereid(Auth::user()->id)->get();
        $post   = post::select('id', 'caption', 'photo', 'user_id')->where('user_id', Auth::user()->id)->get();
        return view('Page.profil', compact('photo', 'post'));
    }

    // Edit Account
    public function edit_account()
    {   
        $photo  = users::select('photo')->whereid(Auth::user()->id)->get();
        return view('Page.account_setting', compact('photo'));
    }

    // Proses Update
    public function update_info(Request $request)
    {
        $request->validate([
            'email'    => 'required | unique:mysql.users,email,' . Auth::user()->id,
            'username' => 'required | unique:mysql.users,username,' . Auth::user()->id,
            'bio'      => 'required | max:250',
        ]);

        $profile = users::find(Auth::user()->id);
        $profile->name      = $request->get('name');
        $profile->email     = $request->get('email');
        $profile->twitter   = $request->get('twitter');
        $profile->instagram = $request->get('instagram');
        $profile->bio       = $request->get('bio');
        $profile->username  = $request->get('username');
        $profile->location  = $request->get('location');
        $profile->site      = $request->get('site');
        $profile->save();

        return redirect()
            ->route('account.edit', Auth::user()->id)
            ->withSuccess('Account Updated !');
    }

    // Update Ava
    public function update_ava(Request $request)
    {
        $request->validate([
            'photo' => 'required | image | mimes:jpeg,png,jpg|max:2048',
        ]);

        $profil = users::find(Auth::id());

        // Proses Saved
        $file     = $request->file('photo');
        $fileName = time().".".$file->getClientOriginalName();
        $request->file('photo')->move("ava/", $fileName);

        // delete from storage
        $data = users::where('id', Auth::id())->first();
        $file1= $data->photo;
        $filename1 = public_path().'/ava/'.$file1;
        \File::delete($filename1);

        $profil->photo = $fileName;
        $profil->save();

        return redirect()
            ->route('account.edit', Auth::user()->id)
            ->withSuccess('Photo Profil Updated !');
    }

    // Delete Ava
    public function delete_ava()
    {
        $profil = users::find(Auth::id());
        $profil['photo'] = '';

        // delete from storage
        $data = users::where('id', Auth::id())->first();
        $file= $data->photo;
        $filename = public_path().'/ava/'.$file;
        \File::delete($filename);

        $profil->update();

        return redirect()
            ->route('account.edit', Auth::user()->id)
            ->withSuccess('Photo Profil Was Deleted !');
    }

    // Show Profil
    public function show_profil()
    {
        return view('Page.show_profil.blade.php');
    }
}
