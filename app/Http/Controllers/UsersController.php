<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersController extends Controller {

    public function displayUsers() {
    	$records = User::all();
    	return view('users', ['records' => $records]);
    }

    public function createUser(Request $request) {
    	$user = new User();
    	$user->user_id  = $request->user_id;
    	$user->password = Hash::make($request->password);
    	$user->name     = $request->name;
    	$user->email    = $request->email;
    	$user->save();

    	return redirect('/');
    }

    public function initEditUserForm(Request $request) {
        $user = User::where('user_id', $request->user_id)->first();
        return view('edit_user', ['record' => $user]);
    }

    public function deleteUser(Request $request) {
        // useridをもとにレコード検索
        $user = User::where('user_id', $request->user_id);
        // 削除
        $user->delete();

        return redirect('/');
    }
}
