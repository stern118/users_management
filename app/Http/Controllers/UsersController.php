<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {
    
    public function displayUsers() {
    	$records = User::all();
    	return view('users', ['records' => $records]);
    }

    public function createUser(Request $request) {
    	$user = new User();
    	$user->user_id  = $request->user_id;
    	$user->password = $request->password;
    	$user->name     = $request->name;
    	$user->email    = $request->email;
    	$user->save();

    	return redirect('/');
    }
}
