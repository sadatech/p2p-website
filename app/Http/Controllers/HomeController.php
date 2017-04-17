<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Content;
use App\SubMenu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($slug = null,$id = null)
    {
        ($id == null) ? $slug_segment = $slug : $slug_segment = $id;
        $menu = Menu::where('parent_id',0)->get();
        if ($slug != null || $id != null) {
            $search_menu_id = Menu::where('slug',$slug_segment)->first();
            $content = Content::where('menu_id',$search_menu_id->id)->get();

            return view('pages.index_v' ,compact('menu','content','search_menu_id'));
            return $search_menu_id;

        }else{

            return view('home_v' ,compact('menu'));
        
        }
    }
    public function register()
    {
        $menu = Menu::where('parent_id',0)->get();
        $menu_all = Menu::get();
        return view('pages.register_v' ,compact('menu','menu_all'));
    }
    public function ckeditor()
    {
        $menu = Menu::where('parent_id',0)->get();
        $menu_all = Menu::get();
        return view('pages.ckeditor_v' ,compact('menu','menu_all'));
    }
    public function addContent(Request $request)
    {
        $menu = Menu::where('parent_id',0)->get();
        $menu_all = Menu::get();
        
        $content = new Content();
        $content->menu_id = $request->menu_id;
        $content->title = $request->title;
        $content->description = $request->description;

        $content->save();
        return view('pages.ckeditor_v' ,compact('menu','menu_all'));
    }}
