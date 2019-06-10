<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\Menu;
use App\Submenu;
use App\Post;
use App\ImageSlider;
use App\Designation;

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
    	$notices=Notice::all();
    	return view('User.index')
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
}
