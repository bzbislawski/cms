<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use App\Http\Requests\PageRequest;

class PageController extends Controller {

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
		$pages = Page::paginate(5);
		return view('adminpanel.pages.index', compact('pages') );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('adminpanel.pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PageRequest $request)
	{
    	//Here we are storing newly created Page in storage. 
		Page::create($request->all());

		\Session::flash('flash_page_positive', trans('adminpanel.page_store')); 
		return redirect('home/pages');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return View
	 */
	public function edit($id)
	{
		$page = Page::find($id);
		return view('adminpanel.pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PageRequest $request)
	{
		$page = Page::findOrFail($id);
		$page->update($request->all());

		\Session::flash('flash_page_positive', trans('adminpanel.page_update'));
		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Page::destroy($id);

		\Session::flash('flash_page_positive', trans('adminpanel.page_delete'));
		return redirect('home/pages');
	}

}
