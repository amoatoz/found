<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

	 public function __construct()
	  {
	    $this->middleware('auth');
	  }


    //
    public function index(Request $request)
    {
    	$request->user()->authorizeRoles(['regularuser']);
        
    	return view('users.dashboard');
    }

}
