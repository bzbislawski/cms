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
	public function send(Request $request)
	{
		
		//var_dump($request);

		Mail::raw($request['text'], function($message) use ($request)
		{
		    $message->from(env('SITE_MAIL'), env('SITE_NAME'));
		    if(isset($request['sendCC']))
		    $message->to(env('SITE_ADMIN_MAIL'))->subject($request['title'])->cc(env('SITE_MAIL'));
		    else
		    {
		    	$message->to(env('SITE_ADMIN_MAIL'))->subject($request['title']);
		    }
		});

		\Session::flash('flash_home_positive', 'Zgłoszenie zostało wysłane'); 
		return redirect('home');
	}
	
}
