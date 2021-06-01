<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('id', 'DESC')->get();
    	return view('backend.pages.user.index', compact('users'));
    }

    public function block(Request $request, $id)
    {
    	User::where('id', $id)->update(['verify_token' => 2]);
    	session()->flash('ereor', 'User blocked');
    	return back();
    }

    public function unblock(Request $request, $id)
    {
    	User::where('id', $id)->update(['verify_token' => 1]);
    	session()->flash('ereor', 'User unblocked');
    	return back();
    }
}
