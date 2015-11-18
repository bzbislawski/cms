<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use App\Teacher;
use App\Http\Requests\TeacherRequest;


class TeacherController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	
	public function index()
	{
		$teachers = Teacher::paginate(10);
		return view('adminpanel.teachers.index', compact('teachers'));
	}

	
	public function create()
	{
		return view('adminpanel.teachers.create');
	}

	
	public function store(TeacherRequest $request)
	{
		$teacher = new Teacher($request->except('image'));
		$teacher->addImage($request);
		$teacher->save();


		\Session::flash('flash_teacher_positive', 'Udalo sie dodac!'); 
		return redirect('home/teachers');
	}

	
	public function edit($id)
	{
		$teacher = Teacher::find($id);
		return view('adminpanel.teachers.edit', compact('teacher'));
	}

	
	public function update($id, TeacherRequest $request)
	{
		$teacher = Teacher::findOrFail($id);

		if(isset($request['Zapisz']))
		{
			$teacher->update($request->except('image'));
			$teacher->addImage($request);
			$teacher->save();

			$message = 'Gratulacje! Profil nauczyciela został zapisany.';
		}

		if(isset($request['Usuń']))
		{
			Teacher::deleteImage($id);
			$teacher->image = "";
			$teacher->save();
			
			$message = 'Gratulacje! Zdjęcie zostało usunięte.';
		}

		\Session::flash('flash_teacher_positive', $message);
		return redirect()->back();
	}


	public function destroy($id)
	{
		Teacher::deleteImage($id);
		Teacher::destroy($id);
		

		\Session::flash('flash_teacher_positive', 'Gratulacje! Nauczyciel został usunięty.');
		return redirect('home/teachers');
	}
}
