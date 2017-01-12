<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Photography;
use App\Gallery;
use App\Teacher;
use File;
use Response;
use View;

class WebsiteController extends Controller
{
    public function __construct()
    {
        $photos = Photography::latest('created_at')
            ->take(16)
            ->get();
        View::share('photos', $photos);
    }

    public function index()
    {
        $banners = Banner::where('is_published', '=', 1)->get();

        return view('home', compact('banners'));
    }

    public function gallery()
    {
        $collection = [];
        $galleries = Gallery::all();
        foreach ($galleries as $gallery) {
            array_push($collection, $gallery->photography->first());
        }

        return view('gallery', compact('collection'));
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
        $path = storage_path('app').'/'.$directory.'/'.$filename;

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header('Content-Type', $type);

        return $response;
    }
}
