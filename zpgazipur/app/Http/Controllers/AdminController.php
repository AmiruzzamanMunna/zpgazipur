<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class AdminController extends Controller
{
    public function index(Request $request)
    {
    	return view('Layouts.Admin');
    }
    public function noticeList(Request $request)
    {
    	$notices=Notice::all();
    	return view('Admin.noticelist')
    			->with('notices',$notices);
    }
    public function noticeForm(Request $request)
    {
    	$notices=Notice::all();
    	return view('Admin.addnotice')
    		->with('notices',$notices);
    }
    public function addNotice(Request $request)
    {
    	$request->validate([
    		'noticetitle'=>'required',
    		'noticedescription'=>'required',
    		'startdate'=>'required',
    		'expiredate'=>'required',
    	]);
    	$notice= new Notice();
    	$notice->title=$request->noticetitle;
    	$notice->description=$request->noticedescription;
    	$notice->noticedate=$request->startdate;
    	$notice->expiredate=$request->expiredate;
    	$date1=$request->expiredate;
    	if ($request->hasFile('attachment')) {
        $file = $request->file('attachment');
        $filename = time() . 'File-1.' . $file->getClientOriginalExtension();
        $location = public_path('files');
        $file->move($location, $filename);
        $notice->attachment = $filename;
      }
      $notice->save();
      $request->session()->flash('message','Data Inserted');
      return redirect()->route('admin.noticeList');
    }
    public function downFile(Request $request,$name)
    {
    	return response()->download(public_path('files/'.$name));
    }
    public function editNotice(Request $request,$id)
    {
    	$notices=Notice::where('id',$id)->get();
    	return view('Admin.updatenotice')
    			->with('notices',$notices);
    }
    public function updateNotice(Request $request,$id)
    {
    	$request->validate([
    		'noticetitle'=>'required',
    		'noticedescription'=>'required',
    		'startdate'=>'required',
    		'expiredate'=>'required',
    	]);
    	$notice= Notice::find($request->id);
    	$notice->title=$request->noticetitle;
    	$notice->description=$request->noticedescription;
    	$notice->noticedate=$request->startdate;
    	$notice->expiredate=$request->expiredate;
    	$date1=$request->expiredate;
    	if ($request->hasFile('attachment')) {
        $file = $request->file('attachment');
        $filename = time() . 'pdf-1.' . $file->getClientOriginalExtension();
        $location = public_path('files/');
        $file->move($location, $filename);
        $notice->attachment = $filename;
      }
      $notice->save();
      $request->session()->flash('message','Data Updated Updated');
      return redirect()->route('admin.noticeList');
    }
    public function noticeDelete(Request $request)
    {
    	$selected=$request->selected;
    	if ($selected) {
    		foreach ($selected as $select) {
    			Notice::where('id',$select)->delete();
    		}
    		$request->session()->flash('message','Data Delected Successfully');
      		return redirect()->route('admin.noticeList');
    	}else{
    		$request->session()->flash('message','Sorry No checkbox Selected');
      		return redirect()->route('admin.noticeList');
    	}
    }
}
