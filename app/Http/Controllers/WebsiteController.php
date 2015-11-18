<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Banner;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$banners = Banner::all();
        $banners = Banner::where('isPublished', '=', 1)->get();
        return view('welcome', compact('banners'));
    }


    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }
    
    public function articles()
    {
        $articles = Banner::all();
        return $articles;
    }




}
