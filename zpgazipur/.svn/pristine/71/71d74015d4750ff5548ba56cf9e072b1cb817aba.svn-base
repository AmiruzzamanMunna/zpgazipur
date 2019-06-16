<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class StatusController extends Controller
{
    public function statusApproved(Request $request,$id)
    {
    	$students=Registration::where('id',$id)->first();
    	if($students){
    		$students->status=1;
    		$students->save();
    		$request->session()->flash('message','Data Updated');
    		return redirect()->route('admin.studentCourseList');
    	}else{
    		$request->session()->flash('message','Sorry Invalid');
    		return redirect()->route('admin.studentCourseList');
    	}
    }
    public function statusDeclined(Request $request,$id)
    {
    	$students=Registration::where('id',$id)->first();
    	if($students){
    		$students->status=2;
    		$students->save();
    		$request->session()->flash('message','Data Updated');
    		return redirect()->route('admin.studentCourseList');
    	}else{
    		$request->session()->flash('message','Sorry Invalid');
    		return redirect()->route('admin.studentCourseList');
    	}
    }
}
