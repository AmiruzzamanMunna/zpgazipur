<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Admin;
use App\Employee;
use App\Designation;
use App\DesignationPost;
use App\ApplicationReference;
use App\ApplicationCategories;
use App\ApplicationReceive;
use App\ApplicationReceiveInvoice;
use App\FileTransfer;
use App\FileStatus;

class ApplicationController extends Controller
{
	public function applicationList(Request $request)
	{
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
		$applists=ApplicationReceiveInvoice::leftjoin('zp_file_status','zp_file_status.status_id','zp_application_received_invoice.status_id')->get();
		return view('Admin.applicationlist')
			->with('admins',$admins)
            ->with('applists',$applists);
	}
    public function addApplication(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	$references=ApplicationReference::all();
    	$catagories=ApplicationCategories::all();
    	$desigs=DesignationPost::all();
    	return view('Admin.addapplication')
    		->with('desigs',$desigs)
            ->with('admins',$admins)
    		->with('references',$references)
    		->with('catagories',$catagories);
    }
    public function applicationStore(Request $request)
    {
    	$request->validate([
    		'application_category_name'=>'required',
    		'reference_id'=>'required',
    		'receiveddate'=>'required',
            'name'=>'required',
            'attachment'=>'mimes:jpeg,png,jpg,gif,svg|max:1000',
            'address'=>'required',
            'number'=>'required|digits:11',
    	]);
        $invoice=new ApplicationReceiveInvoice();
        $invoice->token_id=Str::random(4).time();
        $invoice->application_category_name=$request->application_category_name;
        $invoice->reference_id=$request->reference_id;
        $invoice->name=$request->name;
        $invoice->address=$request->address;
        $invoice->number=$request->number;
        $invoice->date=$request->receiveddate;
        $invoice->status_id=3;
    	if ($invoice->save()>0) {
            if ($request->hasFile('attachment')) {
                $i=0;
                foreach($request->attachment as $file){
                    $app= new ApplicationReceive();
                    $i++;
                    $filename = time()+$i . 'application.'. $file->getClientOriginalExtension();
                    $location = public_path('files');
                    // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
                    $file->move($location, $filename);
                    $app->attachment = $filename;
                    $app->application_category_name=$request->application_category_name;
                    $app->invoice_id=$invoice->id;
                    $app->reference_id=$request->reference_id;
                    $app->receiveddate=$request->receiveddate;
                    $app->stuff_id=$request->session()->get('loggedAdmin');
                    $app->token_id=$invoice->token_id;
                    $app->applicationname=$invoice->name;
                    $app->applicationaddress=$invoice->address;
                    $app->applicationnumber=$invoice->number;
                    $app->save();
                }
            }
        }
        
    	$request->session()->flash('message','Data Inserted');
    	return back();
    }
    public function deleteApplication(Request $request)
    {
        $selected=$request->selected;
        foreach ($selected as $select) {
            ApplicationReceiveInvoice::where('id',$select)->delete();
            ApplicationReceive::where('invoice_id',$select)->delete();
        }
        $request->session()->flash('message','Record Deleted Successfully');
        return back();
    }
    public function applicationDetails(Request $request,$id)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $desigs=DesignationPost::all();
        $applists=ApplicationReceive::leftjoin('zp_admin','zp_admin.id','zp_application_received.stuff_id')->where('invoice_id',$id)->get();
        return view('Admin.applicationlistdetails')
            ->with('desigs',$desigs)
            ->with('admins',$admins)
            ->with('applists',$applists);
    }
    public function fileSend(Request $request)
    {
        $file=new FileTransfer();
        $file->applicationid=$request->applicationid;
        $file->to_postname_id=$request->reference_id;
        $file->filestatus=1;
        $file->from_stuff_id=$request->session()->get('loggedAdmin');
        $app=ApplicationReceiveInvoice::find($request->applicationid);
        $app->status_id=2;
        $file->save();
        $app->save();
        $request->session()->flash('message','Record Send');
        return redirect()->route('application.applicationList');
    }
    public function testSend(Request $request)
    {
        $attachment=$request->attachment;
        dd($attachment);
    }
}
