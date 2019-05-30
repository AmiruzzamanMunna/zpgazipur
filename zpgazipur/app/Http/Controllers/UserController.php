<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	$notices=Notice::all();
    	return view('User.index')
			->with('notices',$notices);
    }
    public function viewNotice(Request $request,$id)
    {
    	$notices=Notice::where('id',$id)->get();
    	return view('User.viewnotice')
    			->with('notices',$notices);
    }
}
