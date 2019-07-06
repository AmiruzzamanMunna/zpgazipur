<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin;
use App\Employee;
use App\DesignationPost;

class StuffContoller extends Controller
{
    public function stuffList(Request $request)
    {
    	$employees=Employee::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	return view('Admin.stufflist')
    		->with('admins',$admins)
            ->with('employees',$employees);
    }
    public function addStuff(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	$posts=DesignationPost::all();
    	return view('Admin.addstaff')
            ->with('admins',$admins)
    		->with('posts',$posts);
    }
    public function addStuffStore(Request $request)
    {
    	$request->validate([
    		'post_name_id'=>'required',
    		'name'=>'required',
    		'number'=>'required',
    	]);
    	$employee= new Employee();
    	$employee->post_name_id=$request->post_name_id;
    	$employee->name=$request->name;
    	$employee->number=$request->number;
    	$employee->joiningdate=$request->joiningdate;
    	$employee->save();
    	$request->session()->flash('message','Data Inserted');
    	return back();
    }
    public function editStuff(Request $request,$id)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $employees=Employee::where('id',$id)->get();
        return view('Admin.updatestuff')
            ->with('admins',$admins)
            ->with('employees',$employees);
    }
    public function updateStuff(Request $request,$id)
    {
        $request->validate([
            'post_name_id'=>'required',
            'name'=>'required',
            'number'=>'required',
        ]);
        $employee=Employee::find($request->id);
        $employee->post_name_id=$request->post_name_id;
        $employee->name=$request->name;
        $employee->number=$request->number;
        $employee->joiningdate=$request->joiningdate;
        $employee->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route('stuff.stuffList');
    }
    public function random(Request $request)
    {
    	$a=Str::random(4).time();
    	$b=(Str::random(4)).time();
    	echo $a."</br>";
    	echo $b;
    }
}
