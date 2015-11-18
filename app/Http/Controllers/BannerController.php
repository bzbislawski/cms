<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Banner;
use App\Http\Requests\BannerRequest;
use App\Storage;


class BannerController extends Controller {

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
		$banners = Banner::paginate(10);
		return view('adminpanel.banners.index', compact('banners') );
	}

	/**
	 * Shows create form for Banner
	 * 
	 * @return View
	 */
	public function create()
	{
		return view('adminpanel.banners.create');
	}

	/**
	 * Store Banner in the storage
	 * 
	 * @return Redirect
	 */
	public function store(BannerRequest $request)
	{

		$banner = new Banner($request->all());
		$banner->addImage($request);
		

		\Session::flash('flash_banner_positive', 'Gratulacje! Baner został poprawnie dodany.'); 
		return redirect('home/banners');
	}

	/**
	 * Shows particular banner edit form.
	 * 
	 * @param  $id
	 * @return view
	 */
	public function edit($id)
	{
		$banner = Banner::find($id);
		return view('adminpanel.banners.edit', compact('banner'));
	}

	/**
	 * Updates/patch Banner in the storage
	 * 
	 * @param  $id
	 * @return Redirect
	 */
	public function update($id, BannerRequest $request)
	{
		$banner = Banner::findOrFail($id);
		$banner->update($request->all());

		\Session::flash('flash_banner_positive', 'Gratulacje! Baner został zapisany.');
		return redirect()->back();
	}

	/**
	 * Destroy Banner from the storage
	 * 
	 * @return Redirect
	 */
	public function destroy($id)
	{
		Banner::deleteImage($id);
		Banner::destroy($id);

		\Session::flash('flash_banner_positive', 'Gratulacje! Baner został usunięty.');
		return redirect('home/banners');
	}

}
