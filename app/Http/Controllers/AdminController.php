<?php

namespace App\Http\Controllers;

use App\Role;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	 public function __construct()
	  {
	    $this->middleware('auth');
	  }


    //
    public function index(Request $request)
    {
    	$request->user()->authorizeRoles(['superadmin']);
    	return view('admin.dashboard');
    }
}
