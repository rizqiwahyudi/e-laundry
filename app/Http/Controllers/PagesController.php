<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('v_index');
    }
    public function login()
    {
    	return view('v_login');
    }
    public function setup(){
    	return view('v_setup');
    }
}
