<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {
    
    public function displayUsers() {
    	$records = User::all();
    	return view('users', ['records' => $records]);
    }
}
