<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
       return view('Auth.register');
    }
    public function registerUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile_no' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'designation' => 'nullable',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = new User();
        $user->name = $request->name;
        $user->mobile_no = $request->mobile_no;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->designation = $request->designation;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()
        ->back()
        ->with('success', 'User registered successfully.');
    }
}
