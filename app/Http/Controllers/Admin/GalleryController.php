<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Photography;
use Storage;
class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('adminpanel.galleries.index', compact('galleries') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery($request->except(['image']));
        $gallery->save();

        if($request->hasFile('image'))
        {
            foreach($request->file("image") as $file) {
                if($file->isValid())
                {
                    $photo = new Photography;
                    $photo->gallery_id = $gallery->id;
                    $photo->save();
                    $extension = $file->getClientOriginalExtension();
                    $fileName = $photo->id . '.' . $extension;
                    Storage::put('photos/' . $fileName, file_get_contents($file->getRealPath()));
                    $photo->image = $fileName;
                    $photo->save();

                }
            }
        }

        \Session::flash('flash_gallery_positive', trans('adminpanel.gallery_store')); 
        return redirect()->action('Admin\GalleryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photos = Photography::where('gallery_id', '=', $id)->get();
        return view('adminpanel.galleries.show', compact('photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photos = Photography::where('gallery_id', '=', $id)->get();
        foreach($photos as $photo)
        {
            Storage::delete('photos/'.$photo->image);
        }

        $gallery = Gallery::find($id);
        $gallery->delete();

        \Session::flash('flash_gallery_positive', trans('adminpanel.gallery_delete'));
        return redirect()->action('Admin\GalleryController@index');
    }

    public function deletePhotography($id)
    {
        $photo = Photography::find($id);
        Storage::delete('photos/'.$photo->image);
        $photo->delete();
        return redirect()->back();
    }
}
