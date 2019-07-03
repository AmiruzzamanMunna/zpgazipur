<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
use App\Gallary;
use App\Address;
use App\Session;

class UserController extends Controller
{
    public function layouts()
    {
        return view('Layouts.user-home');
    }
    public function index(Request $request)
    {
        $address=Address::all();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $subs=Otherpages::orderBy('id','DESC')->get();
        $sessions=Session::first();
        $courses=Course::where('year',$sessions->session_id)->get();
        $menueItems=0;
        $submenuItems=0;
        foreach ($menus as $menue) {
            $menueItems=$menue->menu_title;
            
            $submenus=Submenu::where('menu_id',$menue->id)->get();
            
            foreach ($submenus as $submenue) {
                $submenuItems=$submenue->submenu_name;
               
            }
        }
        $images=ImageSlider::all();
    	$notices=Notice::orderBy('id','DESC')->paginate(5);
    	return view('User.index')
            ->with('address',$address)
            ->with('courses',$courses)
            ->with('cats',$cats)
            ->with('subs',$subs)
            ->with('desigs',$desigs)
            ->with('images',$images)
            ->with('notices',$notices)
            ->with('menus',$menus)
            ->with(compact('menueItems'))
            ->with(compact('submenuItems'));
    }
    public function viewNotice(Request $request,$id)
    {
        $address=Address::all();
        $courses=Course::all();
        $desigs=Designation::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        $menueItems=0;
        $submenuItems=0;
        foreach ($menus as $menue) {
            $menueItems=$menue->menu_title;
            
            $submenus=Submenu::where('menu_id',$menue->id)->get();
            
            foreach ($submenus as $submenue) {
                $submenuItems=$submenue->submenu_name;
               
            }
        }
        $images=ImageSlider::all();
    	$notices=Notice::where('id',$id)->get();
    	return view('User.viewnotice')
    			->with('courses',$courses)
                ->with('desigs',$desigs)
                ->with('address',$address)
                ->with('images',$images)
                ->with('notices',$notices)
                ->with('menus',$menus)
                ->with('submenus',$submenus)
                ->with(compact('menueItems'))
                ->with(compact('submenuItems'));
    }
    public function viewAllNotice(Request $request)
    {
        $address=Address::all();
        $courses=Course::all();
        $cats=Pagecategory::all();
        $subs=Otherpages::orderBy('id','DESC')->get();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $menueItems=0;
        $submenuItems=0;
        foreach ($menus as $menue) {
            $menueItems=$menue->menu_title;
            
            $submenus=Submenu::where('menu_id',$menue->id)->get();
            
            foreach ($submenus as $submenue) {
                $submenuItems=$submenue->submenu_name;
               
            }
        }
        $images=ImageSlider::all();
        $notices=Notice::orderBy('id','desc')->get();
        return view('User.viewallnotice')
            ->with('courses',$courses)
            ->with('cats',$cats)
            ->with('desigs',$desigs)
            ->with('subs',$subs)
            ->with('address',$address)
            ->with('images',$images)
            ->with('notices',$notices)
            ->with('menus',$menus)
            ->with(compact('menueItems'))
            ->with(compact('submenuItems'));
    }
    public function menu(Request $request)
    {
        $address=Address::all();
        $desigs=Designation::all();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $menueItem=0;
        $submenuItem=0;
        foreach ($menus as $menue) {
            $menueItem=$menue->menu_title;
            echo "<ul>".$menueItem."</ul>";
            $submenus=Submenu::where('menu_id',$menue->id)->get();
            
            foreach ($submenus as $submenue) {
                $submenuItem=$submenue->submenu_name;
                echo "<li>".$submenuItem."</li>";
            }
        }
        
    }
    public function allView(Request $request,$menuid,$subid)
    {
        $address=Address::all();
        $courses=Course::all();
        $desigs=Designation::all();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        $posts=Post::where('menu_id',$menuid)->where('submenu_id',$subid)->get();
        return view('User.allview')
                ->with('courses',$courses)
                ->with('desigs',$desigs)
                ->with('address',$address)
                ->with('images',$images)
                ->with('menus',$menus)
                ->with('submenus',$submenus)
                ->with('posts',$posts);
    }
    public function allCategoryView(Request $request,$id)
    {
        $address=Address::all();
        $courses=Course::all();
        $desigs=Designation::all();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        $posts=Otherpages::where('id',$id)->get();
        return view('User.allview')
            ->with('courses',$courses)
            ->with('desigs',$desigs)
            ->with('address',$address)
            ->with('images',$images)
            ->with('menus',$menus)
            ->with('submenus',$submenus)
            ->with('posts',$posts);
}
    public function designationView(Request $request,$id)
    {
        $address=Address::all();
        $courses=Course::all();
        $desigs=Designation::all();
        $desigsnation=Designation::where('id',$id)->get();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        return view('User.designationview')
                ->with('courses',$courses)
                ->with('address',$address)
                ->with('desigsnation',$desigsnation)
                ->with('desigs',$desigs)
                ->with('images',$images)
                ->with('menus',$menus)
                ->with('submenus',$submenus);
    }
    public function preCourse(Request $request)
    {
        $address=Address::all();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $sessions=Session::orderBy('session_id','desc')->take(1)->first();
        $coursesessions=Session::all();
        $precourse=Course::where('year',$request->Course_ID)->get();
        return response()->json($precourse);
    }
    public function studentForm(Request $request)
    {

        $address=Address::all();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $sessions=Session::orderBy('session_id','desc')->take(1)->first();
        $coursesessions=Session::all();
        $precourse=Course::where('year',$request->x)->get();
        $courses=Course::where('year',$sessions->session_id)->get();
        return view('User.admissionregister')
            ->with('courses',$courses)
            ->with('cats',$cats)
            ->with('address',$address)
            ->with('desigs',$desigs)
            ->with('coursesessions',$coursesessions)
            ->with('precourse',$precourse)
            ->with('sessions',$sessions)
            ->with('images',$images)
            ->with('menus',$menus);
    }
    public function studentFormSave(Request $request)
    {
        $request->validate([
            'course_category_name'=>'required',
            'applicant_name'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',
            'occupation'=>'required',
            'permanent_address'=>'required',
            'present_address'=>'required',
            'mobile'=>'required|digits:11',
            'qualification'=>'required',
            'nid'=>'required',
            'birthdate'=>'required',
            'anotherappliedcourse'=>'different:course_category_name',
        ]);
        $reg = new Registration();
        $reg->course_category_name=$request->course_category_name;
        $reg->applicant_name=$request->applicant_name;
        $reg->father_name=$request->father_name;
        $reg->mother_name=$request->mother_name;
        $reg->occupation=$request->occupation;
        $reg->permanent_address=$request->permanent_address;
        $reg->present_address=$request->present_address;
        $reg->mobile=$request->mobile;
        $reg->qualification=$request->qualification;
        $reg->nid=$request->nid;
        $reg->birthdate=$request->birthdate;
        if ($request->sessionyear) {
            $reg->previousyear=$request->sessionyear;
            $reg->previouscourse=$request->previouscourse;
        }
        if ($request->anotherappliedcourse) {
            $reg->anotherappliedcourse=$request->anotherappliedcourse;
        }
        $reg->session=$request->session_id;
        $reg->status='New Applicantion';
        $reg->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function studentWaiverForm(Request $request)
    {
        $address=Address::all();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $courses=Course::all();
        return view('User.studentwaiverform')
                ->with('courses',$courses)
                ->with('cats',$cats)
                ->with('address',$address)
                ->with('desigs',$desigs)
                ->with('images',$images)
                ->with('menus',$menus);
    }
    public function studentWaiverFormSave(Request $request)
    {
        # code...
    }
    public function searchResult(Request $request)
    {
        $address=Address::all();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $courses=Course::all();
        $searchresult=$request->search;
        $submenus=Submenu::all();
        $results=DB::table('zp_post')->leftjoin('zp_submenu','zp_submenu.id','=','zp_post.submenu_id')->where('zp_submenu.submenu_name','like','%'.$searchresult.'%')->take(1)->get();
        return view('User.searchresult')
            ->with('submenus',$submenus)
            ->with('menus',$menus)
            ->with('desigs',$desigs)
            ->with('address',$address)
            ->with('cats',$cats)
            ->with('images',$images)
            ->with('courses',$courses)
            ->with('results',$results);
    }
    public function approvedStudent(Request $request,$name)
    {
        $address=Address::all();
        $students=Registration::where('course_category_name',$name)->where('status','approved')->get();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $courses=Course::all();
        return view('User.approvedstudent')
                ->with('courses',$courses)
                ->with('address',$address)
                ->with('menus',$menus)
                ->with('desigs',$desigs)
                ->with('cats',$cats)
                ->with('images',$images)
                ->with('students',$students);
    }
    public function gallary(Request $request)
    {
        $address=Address::all();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $courses=Course::all();
        $gallaryimages=Gallary::all();
        return view('User.gallary')
            ->with('courses',$courses)
            ->with('address',$address)
            ->with('menus',$menus)
            ->with('desigs',$desigs)
            ->with('cats',$cats)
            ->with('gallaryimages',$gallaryimages)
            ->with('images',$images);
    }
    public function address(Request $request,$id)
    {
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $courses=Course::all();
        $gallaryimages=Gallary::all();
        $address=Address::where('id',$id)->get();
        return view('User.address')
            ->with('courses',$courses)
            ->with('address',$address)
            ->with('menus',$menus)
            ->with('desigs',$desigs)
            ->with('cats',$cats)
            ->with('gallaryimages',$gallaryimages)
            ->with('images',$images);
    }
    public function pdfview(Request $request,$id)
    {
        $pdfs=Post::where('id',$id)->get();
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::all();
        $images=ImageSlider::all();
        $courses=Course::all();
        $gallaryimages=Gallary::all();
        $address=Address::all();
        return view('User.pdfview')
            ->with('pdfs',$pdfs)
            ->with('courses',$courses)
            ->with('address',$address)
            ->with('menus',$menus)
            ->with('desigs',$desigs)
            ->with('cats',$cats)
            ->with('gallaryimages',$gallaryimages)
            ->with('images',$images);
    }
}
