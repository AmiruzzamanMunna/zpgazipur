<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Notice;
use App\Menu;
use App\Submenu;
use App\Post;
use App\ImageSlider;
use App\Designation;
use App\Pagecategory;
use App\Otherpages;
use App\Course;
use App\Registration;
use App\Status;
use App\Gallary;
use App\Admin;
use App\Session;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	return view('Layouts.Admin')
                ->with('admins',$admins);
    }
    public function noticeList(Request $request)
    {
    	$notices=Notice::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	return view('Admin.noticelist')
    			->with('admins',$admins)
                ->with('notices',$notices);
    }
    public function noticeForm(Request $request)
    {
    	$notices=Notice::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	return view('Admin.addnotice')
    		->with('admins',$admins)
            ->with('notices',$notices);
    }
    public function addNotice(Request $request)
    {
    	$rules=[
    		'noticetitle'=>'required',
    		'startdate'=>'required',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
            'attachment'=>'mimes:pdf|max:5000',
    	];
        $mess=[
            'noticetitle.required'=>'Notice Title is Required',
            'startdate.required'=>'Notice Date Is Required',
            'image.required'=>'Image Must be Jpeg,jpg,png,svg',
            'attachment.required'=>'Attachment Must be Pdf',
        ];
        $request->validate($rules,$mess);
    	$notice= new Notice();
    	$notice->title=$request->noticetitle;
    	$notice->description=$request->noticedescription;
    	$notice->noticedate=$request->startdate;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location1 = public_path('images');
            $image->move($location1, $imagename);
            $notice->image = $imagename;
        }
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
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
    	return view('Admin.updatenotice')
    			->with('admins',$admins)
                ->with('notices',$notices);
    }
    public function updateNotice(Request $request,$id)
    {
    	$request->validate([
    		'noticetitle'=>'required',
            'startdate'=>'required',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
            'attachment'=>'mimes:pdf|max:5000',
    	]);
    	$notice= Notice::find($request->id);
    	$notice->title=$request->noticetitle;
    	$notice->description=$request->noticedescription;
    	$notice->noticedate=$request->startdate;
    	$date1=$request->expiredate;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location1 = public_path('images');
            $image->move($location1, $imagename);
            $notice->image = $imagename;
        }
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
    public function allPostList(Request $request)
    {
        $posts=Post::orderby('id','DESC')->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.allpostlist')
            ->with('admins',$admins)
            ->with('posts',$posts);
    }
    public function allPostAdd(Request $request)
    {
        $menus=Menu::all();
        $submenus=Submenu::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.create')
                ->with('menus',$menus)
                ->with('admins',$admins)
                ->with('submenus',$submenus);
    }
    public function postSave(Request $request)
    {
        $request->validate([
            'menu'=>'required',
            'submenu'=>'required',
            'attachment'=>'mimes:pdf|max:5000',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image1'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        $test=$request->submenname;
        $post= new Post();
        $post->menu_id=$request->menu;
        $post->submenu_id=$request->submenu;
        $post->attachment_title=$request->attachment_title;
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time() . 'File-1.' . $file->getClientOriginalExtension();
            $location = public_path('files');
            $file->move($location, $filename);
            $post->attachment = $filename;
        }
        $post->description=$request->description;
        if ($request->hasFile('image')) {
            $image1 = $request->file('image');
            $filename1 = time() . 'image-1.' . $image1->getClientOriginalExtension();
            $location1 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image1->move($location1, $filename1);
            
            $post->image = $filename1;
        }
        $post->length=$request->length;
        $post->width=$request->width;
        if ($request->hasFile('image1')) {
            $image2 = $request->file('image1');
            $filename2 = time() . 'image-2.' . $image2->getClientOriginalExtension();
            $location2 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image2->move($location2, $filename2);
            
            $post->image2 = $filename2;
        }
        $post->save();
        $request->session()->flash('message','Data Inserted');
        return back();

    }
    public function postEdit(Request $request,$id)
    {
        $menus=Menu::all();
        $submenus=Submenu::all();
        $posts=Post::where('id',$id)->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.postupdate')
                ->with('menus',$menus)
                ->with('admins',$admins)
                ->with('submenus',$submenus)
                ->with('posts',$posts);
    }
    public function postUpdate(Request $request,$id)
    {
        $request->validate([
            'menu'=>'required',
            'submenu'=>'required',
        ]);
        $post= Post::find($request->id);
        $post->menu_id=$request->menu;
        $post->submenu_id=$request->submenu;
        $post->description=$request->description;
        $post->attachment_title=$request->attachment_title;
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time() . 'File-1.' . $file->getClientOriginalExtension();
            $location = public_path('files');
            $file->move($location, $filename);
            $post->attachment = $filename;
        }
        if ($request->hasFile('image')) {
            $image1 = $request->file('image');
            $filename1 = time() . 'image-1.' . $image1->getClientOriginalExtension();
            $location1 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image1->move($location1, $filename1);
            
            $post->image = $filename1;
        }
        $post->length=$request->length;
        $post->width=$request->width;
        if ($request->hasFile('image1')) {
            $image2 = $request->file('image1');
            $filename2 = time() . 'image-2.' . $image2->getClientOriginalExtension();
            $location2 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image2->move($location2, $filename2);
            
            $post->image2 = $filename2;
        }
        $post->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route('admin.allPostList');
    }
    public function postDelete(Request $request)
    {
        $selected=$request->selected;
        if ($selected) {
            foreach ($selected as $select) {
                Post::where('id',$select)->delete();
            }
            $request->session()->flash('message','Data Delected Successfully');
            return back();
        }else{
            $request->session()->flash('message','Sorry No checkbox Selected');
            return back();
        }
    }
    public function imageList(Request $request)
    {
        $images=ImageSlider::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.imagelist')
                ->with('admins',$admins)
                ->with('images',$images);
    }
    public function imageForm(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.imageslider')
                ->with('admins',$admins);
    }
    public function imageStore(Request $request)
    {
        $request->validate([
            'image.*'=>'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        if ($request->hasFile('image')) {
            $i=0;
            foreach($request->image as $file){
                $i++;
                $attachment= new ImageSlider();
                $filename = time()+$i . 'slider.'. $file->getClientOriginalExtension();
                $location = public_path('images/slider');
                // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
                $file->move($location, $filename);
                $attachment->image = $filename;
                $attachment->save();
            }
        }
        $request->session()->flash('message','Data Inserted Successfully');
        return back();
    }
    public function imageDelete(Request $request)
    {
        $selected=$request->selected;
        foreach ($selected as $select) {
            ImageSlider::where('id',$select)->delete();
        }
        $request->session()->flash('message','Data Deleted');
        return back();
    }
    public function addDesignation(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.designation')
                ->with('admins',$admins);
    }
    public function storeDesignation(Request $request)
    {
        $request->validate([
            'heading'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        $desig = new Designation();
        $desig->heading=$request->heading;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location = public_path('images/catalog/Users');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image->move($location, $filename);
            
            $desig->image = $filename;
        }
        $desig->description=$request->description;
        $desig->save();
        $request->session()->flash('message','Data Inserted Successfully');
        return back();
    }
    public function viewDesignation(Request $request)
    {
        $desgs=Designation::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.viewdesignation')
                ->with('admins',$admins)
                ->with('desgs',$desgs);
    }
    public function editDesignation(Request $request,$id)
    {
        $desgs=Designation::where('id',$id)->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.updatedesignation')
                ->with('admins',$admins)
                ->with('desgs',$desgs);
    }
    public function updateDesignation(Request $request,$id)
    {
        $desgs=Designation::find($request->id);
        $desgs->heading=$request->heading;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location = public_path('images/catalog/Users');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image->move($location, $filename);
            
            $desgs->image = $filename;
        }
        $desgs->description=$request->description;
        $desgs->save();
        $request->session()->flash('message','Data Updated Successfully');
        return redirect()->route('admin.viewDesignation');
    }
    public function addCategory(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.addpagecategory')
                ->with('admins',$admins);
    }
    public function storeCategory(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'name'=>'required',
        ]);
        $cat=new Pagecategory();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location = public_path('images/uploads');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image->move($location, $filename);
            
            $cat->image = $filename;
        }
        $cat->name=$request->name;
        $cat->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function otherPageList(Request $request)
    {
        $others=Otherpages::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.otherpagelist')
                ->with('admins',$admins)
                ->with('others',$others);
    }
    public function otherPageCategory(Request $request)
    {
        $menus=Pagecategory::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.otherpages')
                ->with('admins',$admins)
                ->with('menus',$menus);
    }
    public function storeOtherPageCategory(Request $request)
    {
        $request->validate([
            'page_category_id'=>'required',
            'title'=>'required',
            'image'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image1'=>'mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        $other=new Otherpages();
        $other->page_category_id=$request->page_category_id;
        $other->title=$request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image->move($location, $filename);
            
            $other->image = $filename;
        }
        $other->description=$request->description;
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $filename1 = time() . 'image-2.' . $image1->getClientOriginalExtension();
            $location1 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image1->move($location1, $filename1);
            
            $other->image2 = $filename1;
        }
        $other->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function editOtherPage(Request $request,$id)
    {
        $others=Otherpages::where('id',$id)->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $menus=Pagecategory::all();
        return view('Admin.updateotherpage')
                ->with('admins',$admins)
                ->with('others',$others)
                ->with('menus',$menus);

    }
    public function editOtherPageUpdate(Request $request,$id)
    {
        $request->validate([
            'page_category_id'=>'required',
            'title'=>'required',
        ]);
        $other=Otherpages::find($request->id);
        $other->page_category_id=$request->page_category_id;
        $other->title=$request->title;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . 'image-1.' . $image->getClientOriginalExtension();
            $location = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image->move($location, $filename);
            
            $other->image = $filename;
        }
        $other->description=$request->description;
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $filename1 = time() . 'image-2.' . $image1->getClientOriginalExtension();
            $location1 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image1->move($location1, $filename1);
            
            $other->image2 = $filename1;
        }
        $other->save();
        $request->session()->flash('message','Data Updated Successfully');
        return redirect()->route('admin.otherPageList');
    }
    public function otherPageDelete(Request $request)
    {
        $selected=$request->selected;
        foreach ($selected as $select) {
            Otherpages::where('id',$select)->delete();
        }
        return back();
        $request->session()->flash('message','Data Deleted Successfully');
    }
    public function navMenu(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.navcategory')
            ->with('admins',$admins);
    }
    public function storeNavMenu(Request $request)
    {
        $request->validate([
            'menu_title'=>'required',
        ]);
        $menu= new Menu();
        $menu->menu_title=$request->menu_title;
        $menu->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function navSubMenu(Request $request)
    {
        $menus=Menu::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.navsubcategory')
                ->with('admins',$admins)
                ->with('menus',$menus);
    }
    public function StorenavSubMenu(Request $request)
    {
        $submenus=new Submenu();
        $submenus->menu_id=$request->menu_id;
        $submenus->submenu_name=$request->submenu_name;
        $submenus->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function courselist(Request $request)
    {
        $courses=Course::leftjoin('zp_sessions','zp_sessions.session_id','zp_course.year')->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $sessions=Session::orderby('session_id','desc')->get();
        return view('Admin.courselist')
            ->with('admins',$admins)
            ->with('sessions',$sessions)
            ->with('courses',$courses);
    }
    public function courseFilter(Request $request)
    {
        $courses=Course::leftjoin('zp_sessions','zp_sessions.session_id','zp_course.year')->where('year',$request->status_year)->get();
        $sessions=Session::orderby('session_id','desc')->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.courselist')
            ->with('admins',$admins)
            ->with('sessions',$sessions)
            ->with('courses',$courses);
    }
    public function courseAdd(Request $request)
    {
        $sessions=Session::orderby('session_id','desc')->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.courseadd')
                ->with('admins',$admins)
                ->with('sessions',$sessions);
    }
    public function storeCourseAdd(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'session_id'=>'required',
        ]);
        $course= new Course();
        $course->name=$request->name;
        $course->year=$request->session_id;
        $course->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route('admin.courselist');
    }
    public function courseEdit(Request $request,$id)
    {
        $courses=Course::leftjoin('zp_sessions','zp_sessions.session_id','zp_course.year')->where('id',$id)->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.courseupdate')
            ->with('admins',$admins)
            ->with('courses',$courses);
    }
    public function courseUpdate(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'year'=>'required',
        ]);
        $course=Course::find($request->id);
        $course->name=$request->name;
        $course->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route('admin.courselist');
    }
    public function courseDelete(Request $request)
    {
        $ids=$request->ids;
        if ($ids) {
            Course::wherein('id',explode(",",$ids))->delete();
        }
    }
    public function sessionList(Request $request)
    {
        $sessions=Session::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('admin.sessionList',['sessions'=>$sessions,'admins'=>$admins]);
    }
    public function sessionAdd(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.sessionadd',['admins'=>$admins]);
    }
    public function sessionStore(Request $request)
    {
        $request->validate([
            'session_name'=>'required',
        ]);
        $session=new Session();
        $session->session_name=$request->session_name;
        $session->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function sessionEdit(Request $request,$id)
    {
        $sessions=Session::where('session_id','=',$id)->get();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.updatesession')
            ->with('admins',$admins)
            ->with('sessions',$sessions);
    }
    public function sessionUpdate(Request $request,$id)
    {
        $request->validate([
            'session_name'=>'required',
        ]);
        $sessions=Session::where('session_id','=',$id)->update([

            'session_name'=>$request->session_name,
        ]);
        $request->session()->flash('message','Data Updated Inserted');
        return redirect()->route('admin.sessionList');
    }
    public function studentCourseList(Request $request)
    {
        $students=Registration::leftjoin('zp_sessions','zp_sessions.session_id','zp_registration.session')->paginate(100);
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $statuss=Status::all();
        $sessions=Session::first();
        $courses=Course::where('year',$sessions->session_id)->get();
        return view('Admin.studentformlist')
                ->with('courses',$courses)
                ->with('admins',$admins)
                ->with('statuss',$statuss)
                ->with('students',$students);
    }
    public function studentCourseView(Request $request,$id)
    {
        $students=Registration::leftjoin('zp_sessions','zp_sessions.session_id','zp_registration.session')->where('id',$id)->get();
        $statuss=Status::all();
        $courses=Course::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.studentstatus')
            ->with('statuss',$statuss)
            ->with('admins',$admins)
            ->with('courses',$courses)
            ->with('students',$students);
    }
    public function studentCourseViewUpdate(Request $request,$id)
    {
        $request->validate([
            'course_category_name'=>'required',
            'applicant_name'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',
            'occupation'=>'required',
            'permanent_address'=>'required',
            'present_address'=>'required',
            'mobile'=>'required',
            'qualification'=>'required',
            'nid'=>'required',
            'birthdate'=>'required',
            'status'=>'required',
        ]);
        $student=Registration::find($request->id);
        $student->course_category_name=$request->course_category_name;
        $student->applicant_name=$request->applicant_name;
        $student->father_name=$request->father_name;
        $student->mother_name=$request->mother_name;
        $student->occupation=$request->occupation;
        $student->permanent_address=$request->permanent_address;
        $student->present_address=$request->present_address;
        $student->mobile=$request->mobile;
        $student->qualification=$request->qualification;
        $student->nid=$request->nid;
        $student->birthdate=$request->birthdate;
        if ($request->previouscourse) {
            $student->previouscourse=$request->previouscourse;
        }
        if ($request->anotherappliedcourse) {
            $student->anotherappliedcourse=$request->anotherappliedcourse;
        }
        
        $student->status=$request->status;
        $student->save();
        $request->session()->flash('message','Data Modified');
        return redirect()->route('admin.studentCourseList');
    }
    public function approved(Request $request)
    {
    	$students=Registration::where('status','Approved')->paginate(100);
    	$statuss=Status::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $sessions=Session::first();
        $courses=Course::where('year',$sessions->session_id)->get();
    	return view('Admin.studentformlist')
    			->with('statuss',$statuss)
                ->with('courses',$courses)
                ->with('admins',$admins)
                ->with('sessions',$sessions)
    			->with('students',$students);
    }
    public function pending(Request $request)
    {
    	$students=Registration::where('status','Pending')->paginate(100);
    	$statuss=Status::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $sessions=Session::first();
        $courses=Course::where('year',$sessions->session_id)->get();
    	return view('Admin.studentformlist')
    			->with('statuss',$statuss)
                ->with('admins',$admins)
                ->with('courses',$courses)
                ->with('sessions',$sessions)
    			->with('students',$students);
    }
    public function cancel(Request $request)
    {
    	$students=Registration::where('status','Cancel')->paginate(100);
    	$statuss=Status::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $sessions=Session::first();
        $courses=Course::where('year',$sessions->session_id)->get();
    	return view('Admin.studentformlist')
    			->with('statuss',$statuss)
                ->with('admins',$admins)
                ->with('courses',$courses)
                ->with('sessions',$sessions)
    			->with('students',$students);
    }
    public function filter(Request $request)
    {
        if ($request->filter) {
            $students=Registration::orderby('id','desc')->where('status','like','%'.$request->filter.'%')->paginate(100);
        }
        if ($request->applicant_name) {
            $students=Registration::orderby('id','desc')->where('applicant_name','like','%'.$request->applicant_name.'%')->paginate(100);
        }
        if ($request->mobile) {

            $students=Registration::orderby('id','desc')->where('mobile','like','%'.$request->mobile.'%')->paginate(100);
        }
        if ($request->course) {

            $students=Registration::orderby('id','desc')->where('course_category_name','like','%'.$request->course.'%')->paginate(100);
        }
        if ($request->course && $request->filter) {

            $students=Registration::orderby('id','desc')->where('course_category_name','like','%'.$request->course.'%')->where('status','like','%'.$request->filter.'%')->paginate(100);
        }
        if ($request->applicant_name && $request->filter) {

            $students=Registration::orderby('id','desc')->where('applicant_name','like','%'.$request->applicant_name.'%')->where('status','like','%'.$request->filter.'%')->paginate(100);
        }
        if ($request->course && $request->applicant_name) {
            $students=Registration::orderby('id','desc')->where('course_category_name','like','%'.$request->course.'%')->where('applicant_name','like','%'.$request->applicant_name.'%')->paginate(100);
        }
        if ($request->course && $request->mobile && $request->filter) {
            $students=Registration::orderby('id','desc')->where('course_category_name','like','%'.$request->course.'%')->where('mobile','like','%'.$request->mobile.'%')->where('status','like','%'.$request->filter.'%')->paginate(100);
        }
        if ($request->course && $request->applicant_name && $request->mobile) {
            $students=Registration::orderby('id','desc')->where('applicant_name','like','%'.$request->applicant_name.'%')->where('course_category_name','like','%'.$request->course.'%')->where('mobile','like','%'.$request->mobile.'%')->paginate(100);
        }
        if ($request->course && $request->applicant_name && $request->mobile && $request->filter) {
            $students=Registration::orderby('id','desc')->where('applicant_name','like','%'.$request->applicant_name.'%')->where('course_category_name','like','%'.$request->course.'%')->where('mobile','like','%'.$request->mobile.'%')->where('status','like','%'.$request->filter.'%')->paginate(100);
        }
        $statuss=Status::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $sessions=Session::first();
        $courses=Course::where('year',$sessions->session_id)->get();
        return view('Admin.studentformlist')
                ->with('sessions',$sessions)
                ->with('admins',$admins)
                ->with('statuss',$statuss)
                ->with('courses',$courses)
                ->with('students',$students);
    }
    public function gallaryImage(Request $request)
    {
        $images=Gallary::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.gallarylist')
            ->with('admins',$admins)
            ->with('images',$images);
    }
    public function addgallary(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.addgallary')
                ->with('admins',$admins);
    }
    public function addGallarySave(Request $request)
    {
        $request->validate([
            'image.*'=>'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
        if ($request->hasFile('image')) {
            $i=0;
            foreach($request->image as $file){
                $i++;
                $attachment= new Gallary();
                $filename = time()+$i . 'slider.'. $file->getClientOriginalExtension();
                $location = public_path('images/gallary');
                // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
                $file->move($location, $filename);
                $attachment->name = $filename;
                $attachment->save();
            }
        }
        $request->session()->flash('message','Data Inserted Successfully');
        return back();
    }
    public function gallaryImageDelete(Request $request)
    {
        $selected=$request->selected;
        foreach ($selected as $select) {
            Gallary::where('id',$select)->delete();
        }
        $request->session()->flash('message','Data Deleted');
        return back();
    }
    public function adminList(Request $request)
    {
        $adminss=Admin::all();
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.adminlist')
            ->with('adminss',$adminss)
            ->with('admins',$admins);
    }
    public function addAdmin(Request $request)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        return view('Admin.addadmin')
                ->with('admins',$admins);
    }
    public function adminStore(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'number'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);
        $admin= new Admin();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->address=$request->address;
        $admin->number=$request->number;
        $admin->password=Hash::make($request->password);
        $admin->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route('admin.adminList');
    }
    public function editAdmin(Request $request,$id)
    {
        $admins=Admin::where('id',$request->session()->get('loggedAdmin'))->get();
        $adminss=Admin::where('id',$id)->get();
        return view('Admin.updateadmin')
            ->with('admins',$admins)
            ->with('adminss',$adminss);
    }
    public function adminUpdate(Request $request,$id)
    {
        $admin=Admin::find($request->id);
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'number'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->address=$request->address;
        $admin->number=$request->number;
        $admin->password=Hash::make($request->password);
        $admin->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route('admin.adminList');
    }
}
