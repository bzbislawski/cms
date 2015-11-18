<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;

class Teacher extends Model {

	private static $imagePath = '/public/gallery/teacher/';

	protected $table = 'teachers';

	protected $fillable = ['name', 'contact', 'about', 'image', 'isPublished'];

	public function addImage($request)
	{
    	if($request->hasFile('image'))
    	{
			if ($request->file('image')->isValid())
			{
			    $extension = $request->file('image')->getClientOriginalExtension();
			    
			    do{//in the future this loop could throw exception when disk is full
			    		$fileName = rand(111111,999999).'.'.$extension; // renaming image
			    		$isFileExist = file_exists(base_path() . self::$imagePath . $fileName);
			    }while($isFileExist == true);

			    $request->file('image')->move(base_path() . self::$imagePath, $fileName);
			    $this->image = $fileName;
			}
		}
	}


	public static function deleteImage($id)
	{
		$filename = Teacher::where('id', '=',$id)->first()->image;
		if($filename != "")
			unlink(base_path() . self::$imagePath . $filename);
	}



}
