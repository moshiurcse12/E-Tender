<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\StringHelper;
use App\Models\User;
use Session;
use Hash;
use Auth;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:web');
  }
  public function index()
  {
    return redirect()->route('user.tender.index');
  }


  public function profile()
  {
  	return view('frontend.pages.profile.index');
  }


   public function editProfile(Request $request)
    {
        $user = User::find(Auth::guard('web')->user()->id);

        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|unique:users,email,'.$user->id,
        'phone' => 'required|unique:users,phone,'.$user->id,
        'city' => 'required',
        'address' => 'required',
        'account_role' => 'required',
        'designation' => 'required',
        'organization' => 'required',
      ]);

        // insert form data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->account_role = $request->account_role;
        $user->designation = $request->designation;
        $user->organization = $request->organization;
        $user->username = StringHelper::createSlug($request->name, 'User', 'username');
        if($request->image != null){
            if($user->image){
                $user->image = ImageUploadHelper::update('image', $request->file('image'), time(), 'public/images/users', $user->image);
            }
            else{
                $user->image = ImageUploadHelper::upload('image', $request->file('image'), time(), 'public/images/users');
            }
        }
        $user->save();

        session()->flash('success', 'Profile edited successfully');
        return back();

    }
}
