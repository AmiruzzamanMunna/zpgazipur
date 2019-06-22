<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class LoginController extends Controller
{
 	public function loginPage(Request $request)
    {
        return view('Admin.login');
    }
    public function loginCheck(Request $request)
    {
        $request->validate([
        	'name'=>'required',
        	'password'=>'required',
        ]);
        $admins=Admin::where('name',$request->name)->first();
        if($admins && Hash::check($request->password,$admins->password)){
        	$request->session()->put('loggedAdmin',$admins->id);
        	$request->session()->flash('message','Login Successful');
        	return redirect()->route('admin.index');
        }else{
        	$request->session()->flash('message','Login Unsuccessful');
        	return back();
        }
    }
    public function logout(Request $request)
    {
    	$request->session()->flush();
    	$request->session()->regenerate();
    	return redirect()->route('login.loginPage');
    }
}
