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
    public function allPost(Request $request)
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
        $post->save();
        $request->session()->flash('message','Data Inserted');
        return back();

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
}
