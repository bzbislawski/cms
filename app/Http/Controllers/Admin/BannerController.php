<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Banner;
use App\Http\Requests\BannerRequest;
use Storage;

class BannerController extends Controller
{
    /**
     * Create a new controller instance.
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
        $banners = Banner::paginate(10);

        return view('adminpanel.banners.index', compact('banners'));
    }

    /**
     * Shows create form for Banner.
     *
     * @return View
     */
    public function create()
    {
        return view('adminpanel.banners.create');
    }

    /**
     * Store Banner in the storage.
     *
     * @return Redirect
     */
    public function store(BannerRequest $request)
    {
        $banner = new Banner($request->except(['image']));
        $banner->save();
        $banner->addImage($request);

        \Session::flash('flash_banner_positive', trans('adminpanel.banner_store'));

        return redirect()->action('Admin\BannerController@index');
    }

    /**
     * Shows particular banner edit form.
     *
     * @param  $id
     *
     * @return view
     */
    public function edit($id)
    {
        $banner = Banner::find($id);

        return view('adminpanel.banners.edit', compact('banner'));
    }

    /**
     * Updates/patch Banner in the storage.
     *
     * @param  $id
     *
     * @return Redirect
     */
    public function update($id, BannerRequest $request)
    {
        $banner = Banner::findOrFail($id);
        $banner->update($request->all());

        \Session::flash('flash_banner_positive', trans('adminpanel.banner_update'));

        return redirect()->back();
    }

    /**
     * Destroy Banner from the storage.
     *
     * @return Redirect
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->deleteImage($banner->image);
        $banner->delete();

        \Session::flash('flash_banner_positive', trans('adminpanel.banner_delete'));

        return redirect()->action('Admin\BannerController@index');
    }
}
