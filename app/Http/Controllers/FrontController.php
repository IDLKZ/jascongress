<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $posts = Blog::latest()->take(6)->get();
        $banner = Banner::latest()->first();
        $lang = Language::getLg();
//        $posts = $posts->reverse();
//        dd($posts);
        return view('welcome', compact('teams', 'posts', 'banner', 'lang'));
    }

    public function news()
    {
        $posts = Blog::orderBy('created_at', 'desc')->paginate(9);
        $lang = Language::getLg();
        return view('news', compact('posts', 'lang'));
    }

    public function single($id)
    {
        $post = Blog::find($id);
        return view('single', compact('post'));
    }

}
