<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;
class PagesController extends Controller
{
    public function getPage($slug,$id = null)
    {
    	($id == null) ? $slug_segment = $slug : $slug_segment = $id;
    	$search_menu_id = Menu::where('slug',$slug_segment)->first();
    	$content = Content::where('menu_id',$search_menu_id->parent_id)->get();
    	$menu = Menu::where('parent_id',0)->get();
    	// return view('home_v' ,compact('content','menu'));
    	return $content;
    }
}
