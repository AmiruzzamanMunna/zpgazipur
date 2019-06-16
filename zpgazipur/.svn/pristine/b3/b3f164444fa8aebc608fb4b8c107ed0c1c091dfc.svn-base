<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class UserController extends Controller
{
    public function layouts()
    {
        return view('Layouts.user-home');
    }
    public function index(Request $request)
    {
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::with('othercat')->get();
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
            ->with('cats',$cats)
            ->with('desigs',$desigs)
            ->with('images',$images)
            ->with('notices',$notices)
            ->with('menus',$menus)
            ->with(compact('menueItems'))
            ->with(compact('submenuItems'));
    }
    public function viewNotice(Request $request,$id)
    {
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
    			->with('desigs',$desigs)
                ->with('images',$images)
                ->with('notices',$notices)
                ->with('menus',$menus)
                ->with('submenus',$submenus)
                ->with(compact('menueItems'))
                ->with(compact('submenuItems'));
    }
    public function viewAllNotice(Request $request)
    {
        $cats=Pagecategory::with('othercat')->get();
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
        return view('User.index')
            ->with('cats',$cats)
            ->with('desigs',$desigs)
            ->with('images',$images)
            ->with('notices',$notices)
            ->with('menus',$menus)
            ->with(compact('menueItems'))
            ->with(compact('submenuItems'));
    }
    public function menu(Request $request)
    {
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
        $desigs=Designation::all();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        $posts=Post::where('menu_id',$menuid)->where('submenu_id',$subid)->get();
        return view('User.allview')
                ->with('desigs',$desigs)
                ->with('images',$images)
                ->with('menus',$menus)
                ->with('submenus',$submenus)
                ->with('posts',$posts);
    }
    public function allCategoryView(Request $request,$id)
    {
        $desigs=Designation::all();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        $posts=Otherpages::where('id',$id)->get();
        return view('User.allview')
            ->with('desigs',$desigs)
            ->with('images',$images)
            ->with('menus',$menus)
            ->with('submenus',$submenus)
            ->with('posts',$posts);
}
    public function designationView(Request $request,$id)
    {
        $desigs=Designation::where('id',$id)->get();
        $images=ImageSlider::all();
        $menus=Menu::all();
        $submenus=Submenu::all();
        return view('User.designationview')
                ->with('desigs',$desigs)
                ->with('images',$images)
                ->with('menus',$menus)
                ->with('submenus',$submenus);
    }
    public function studentForm(Request $request)
    {
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::with('othercat')->get();
        $images=ImageSlider::all();
        $courses=Course::all();
        return view('User.admissionregister')
            ->with('courses',$courses)
            ->with('cats',$cats)
            ->with('desigs',$desigs)
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
            'mobile'=>'required',
            'qualification'=>'required',
            'nid'=>'required',
            'birthdate'=>'required',
            'previouscourse'=>'required',
            'anotherappliedcourse'=>'required',
            'session'=>'required',
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
        $reg->previouscourse=$request->previouscourse;
        $reg->anotherappliedcourse=$request->anotherappliedcourse;
        $reg->session=$request->session;
        $reg->status=0;
        $reg->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function searchResult(Request $request)
    {
        $menus=Menu::with('submenus')->get();
        $desigs=Designation::all();
        $cats=Pagecategory::with('othercat')->get();
        $images=ImageSlider::all();
        $courses=Course::all();
        $searchresult=$request->search;
        $submenus=Submenu::all();
        $results=Submenu::where('submenu_name','like','%'.$searchresult.'%')->get();
        return view('User.searchresult')
            ->with('submenus',$submenus)
            ->with('menus',$menus)
            ->with('desigs',$desigs)
            ->with('cats',$cats)
            ->with('images',$images)
            ->with('courses',$courses)
            ->with('results',$results);
    }
}
