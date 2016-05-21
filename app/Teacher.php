<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Teacher extends Model {

	protected $table = 'teachers';

	protected $fillable = ['name', 'contact', 'about', 'image', 'isPublished'];

	/**
     * Add file name to database, add file to storage, save all
     * @param type $request 
     * @return null
     */
    public function addImage($request)
    {
        if($request->hasFile('image'))
        {
	        if ($request->file('image')->isValid())
	        {
	            $extension = $request->file('image')->getClientOriginalExtension();
	            $fileName = $this->id . '.' . $extension;
	            Storage::put('teachers/' . $fileName, file_get_contents($request->file('image')->getRealPath()));

	            $this->image = $fileName;
	            var_dump($fileName);
	            $this->save();
	        }
	    }

    }

    public function deleteImage($filename)
    {
    	$path = 'teachers/'. $filename;
        if(Storage::has($path) && $filename != "")
            Storage::delete($path);
    }

}
