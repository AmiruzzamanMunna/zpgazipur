<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use App\Menu;
use App\Submenu;

class UserController extends Controller
{
    public function layouts()
    {
        return view('Layouts.user-home');
    }
    public function index(Request $request)
    {
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
    	$notices=Notice::all();
    	return view('User.index')
			->with('notices',$notices)
            ->with('menus',$menus)
            ->with(compact('menueItems'))
            ->with(compact('submenuItems'));
    }
    public function viewNotice(Request $request,$id)
    {
    	$notices=Notice::where('id',$id)->get();
    	return view('User.viewnotice')
    			->with('notices',$notices);
    }
    public function menu(Request $request)
    {
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
}
