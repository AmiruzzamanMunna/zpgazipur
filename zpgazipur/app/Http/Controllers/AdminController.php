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
    public function allPostList(Request $request)
    {
        $posts=Post::all();
        return view('Admin.allpostlist')
            ->with('posts',$posts);
    }
    public function allPostAdd(Request $request)
    {
        $menus=Menu::all();
        $submenus=Submenu::all();
        return view('Admin.create')
                ->with('menus',$menus)
                ->with('submenus',$submenus);
    }
    public function postSave(Request $request)
    {
        $request->validate([
            'menu'=>'required',
            'submenu'=>'required',
        ]);
        $post= new Post();
        $post->menu_id=$request->menu;
        $post->submenu_id=$request->submenu;
        $post->description=$request->description;
        if ($request->hasFile('image')) {
            $image1 = $request->file('image');
            $filename1 = time() . 'image-1.' . $image1->getClientOriginalExtension();
            $location1 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image1->move($location1, $filename1);
            
            $post->image = $filename1;
        }
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
        return view('Admin.postupdate')
                ->with('menus',$menus)
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
        if ($request->hasFile('image')) {
            $image1 = $request->file('image');
            $filename1 = time() . 'image-1.' . $image1->getClientOriginalExtension();
            $location1 = public_path('images');
            // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
            $image1->move($location1, $filename1);
            
            $post->image = $filename1;
        }
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
        return view('Admin.imagelist')
                ->with('images',$images);
    }
    public function imageForm(Request $request)
    {
        return view('Admin.imageslider');
    }
    public function imageStore(Request $request)
    {
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
        return view('Admin.designation');
    }
    public function storeDesignation(Request $request)
    {
        $request->validate([
            'heading'=>'required',
            'description'=>'required',
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
        return view('Admin.viewdesignation')
                ->with('desgs',$desgs);
    }
    public function editDesignation(Request $request,$id)
    {
        $desgs=Designation::where('id',$id)->get();
        return view('Admin.updatedesignation')
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
        return view('Admin.addpagecategory');
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
        return view('Admin.otherpagelist')
                ->with('others',$others);
    }
    public function otherPageCategory(Request $request)
    {
        $menus=Pagecategory::all();
        return view('Admin.otherpages')
                ->with('menus',$menus);
    }
    public function storeOtherPageCategory(Request $request)
    {
        $request->validate([
            'page_category_id'=>'required',
            'title'=>'required',
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
        $other->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function editOtherPage(Request $request,$id)
    {
        $others=Otherpages::where('id',$id)->get();
        $menus=Pagecategory::all();
        return view('Admin.updateotherpage')
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
        return view('Admin.navcategory');
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
        return view('Admin.navsubcategory')
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
        $courses=Course::all();
        return view('Admin.courselist')
            ->with('courses',$courses);
    }
    public function courseAdd(Request $request)
    {
        return view('Admin.courseadd');
    }
    public function storeCourseAdd(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'year'=>'required',
        ]);
        $course= new Course();
        $course->name=$request->name;
        $course->year=$request->year;
        $course->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route('admin.courselist');
    }
    public function courseEdit(Request $request,$id)
    {
        $courses=Course::where('id',$id)->get();
        return view('Admin.courseupdate')
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
        $course->year=$request->year;
        $course->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route('admin.courselist');
    }
    public function courseDelete(Request $request)
    {
        $selected=$request->selected;
        if ($selected) {
            foreach ($selected as $select) {
                Course::where('id',$select)->delete();
            }
            $request->session()->flash('message','Data Delected Successfully');
            return back();
        }else{
            $request->session()->flash('message','Sorry No checkbox Selected');
            return back();
        }
    }
    public function studentCourseList(Request $request)
    {
        $students=Registration::all();
        return view('Admin.studentformlist')
                ->with('students',$students);
    }
}
