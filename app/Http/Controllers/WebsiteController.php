<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Banner;
use App\Photography;
use App\Gallery;
use App\Teacher;
use File;
use Response;
use Request as Req;
use View;

class WebsiteController extends Controller
{

    public function __construct()
    {
        $photos = Req::get('photos');
        View::share('photos', $photos);
    }

    public function index()
    {
        $banners = Banner::where('isPublished', '=', 1)->get();

        return view('home', compact('banners'));
    }

    public function gallery()
    {
        //get one photo from each gallery then return it to view
        $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
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

    public function teachers()
    {
        $teachers = Teacher::all();
        return view('teacher', compact('teachers'));
    }

    public function singleTeacher($id)
    {
        $teacher = Teacher::find($id);
        return view('singleTeacher', compact('teacher'));
    }

    public function images($directory, $filename)
    {
        $path = storage_path('app') . '/' . $directory .'/' . $filename;

        if(!File::exists($path)) abort(404);

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }




}
