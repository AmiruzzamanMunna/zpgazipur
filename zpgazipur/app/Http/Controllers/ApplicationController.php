<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin;
use App\Employee;
use App\DesignationPost;
use App\ApplicationReference;
use App\ApplicationCategories;
use App\ApplicationReceive;

class ApplicationController extends Controller
{
	public function applicationList(Request $request)
	{
		$applists=ApplicationReceive::all();
		return view('Admin.applicationlist')
			->with('applists',$applists);
	}
    public function addApplication(Request $request)
    {
    	$references=ApplicationReference::all();
    	$catagories=ApplicationCategories::all();
    	$desigs=DesignationPost::all();
    	return view('Admin.addapplication')
    		->with('desigs',$desigs)
    		->with('references',$references)
    		->with('catagories',$catagories);
    }
    public function applicationStore(Request $request)
    {
    	$request->validate([
    		'application_category_name'=>'required',
    		'reference_id'=>'required',
    		'receiveddate'=>'required',
    		'stuff_id'=>'required',
    	]);
    	$app= new ApplicationReceive();
    	$app->application_category_name=$request->application_category_name;
    	$app->reference_id=$request->reference_id;
    	$app->receiveddate=$request->receiveddate;
    	$app->stuff_id=$request->stuff_id;
    	$app->token_id=Str::random(4).time();
    	$app->save();
    	$request->session()->flash('message','Data Inserted');
    	return back();
    }
}
