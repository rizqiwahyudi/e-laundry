<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;


class SetupController extends Controller
{

    public function store(Request $request){
    	$rules = [
    		'username' => 'required|regex:/^\S*$/u',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:8|',
    		'confirmPassword' => 'required|min:8|same:password'
    	];
    	$messages = [
    		'username.required' => 'Username wajib diisi.',
    		'username.regex' => 'Username tidak boleh ada spasi.',
    		'email.required' => 'Email wajib diisi.',
    		'email.email' => 'Email tidak valid.',
    		'email.unique' => 'Email sudah terdaftar.',
    		'password.required' => 'Password wajib diisi.',
    		'password.min' => 'Password minimal 8 karakter.',
    		'confirmPassword.required' => 'Confirm Password wajib diisi.',
    		'confirmPassword.min' => 'Confirm Password minimal 8 karakter',
    		'confirmPassword.same' => 'Confirm Password Harus sama dengan Password'
    	];

    	$validator = Validator::make($request->all(), $rules, $messages);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput($request->all());
    	}

    	User::create([
    		'name' => $request->username,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    		'role' => 'is_Admins'
    	]);

    	return redirect('/login')->with('success', 'Admin Created Successfully.');
    }
}
