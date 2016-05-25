<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Banner;
use File;
use Response;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $banners = Banner::where('isPublished', '=', 1)->get();
        return view('home', compact('banners'));
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
