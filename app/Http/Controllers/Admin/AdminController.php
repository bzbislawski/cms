<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class AdminController extends Controller
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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('adminpanel.home');
	}

	//In the future later() method should be used
	public function send()
	{
		$input = Request::all();

		Mail::raw($input['text'], function($message) use ($input)
		{
		    $message->from(env('SITE_MAIL'), env('SITE_NAME'));
		    if(isset($input['sendCC']))
		    $message->to(env('SITE_AUTHOR_MAIL'))->subject($input['title'])->cc(env('SITE_MAIL'));
		    else
		    {
		    	$message->to(env('SITE_AUTHOR_MAIL'))->subject($input['title']);
		    }
		});

		\Session::flash('flash_home_positive', 'Zgłoszenie zostało wysłane'); 
		return redirect('home');
	}
	
}
