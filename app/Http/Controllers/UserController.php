<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\ChickenDbObject;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
    	// Get all chickens owned by this user
    	$chickens = ChickenDbObject::where('owner_id', $id)->get();

        return view('user.profile', [
        	'user' => User::findOrFail($id), 
        	'chickens' => $chickens
        ]);
    }

    public function listAll() 
    {
        return view('user.list', [
            'users' => User::all()
        ]);
    }
}