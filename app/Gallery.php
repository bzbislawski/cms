<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Gallery extends Model
{
    protected $table = 'galleries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'published_at'];

	public function photography()
    {
        return $this->hasMany('App\Photography');
    }

    public function addImage($request)
    {
        if($request->hasFile('image'))
        {
            foreach($request->file("image") as $file) {
                if($file->isValid())
                {
                    $photo = new Photography;
                    $photo->gallery_id = $this->id;
                    $photo->save();
                    $extension = $file->getClientOriginalExtension();
                    $fileName = $photo->id . '.' . $extension;
                    Storage::put('photos/' . $fileName, file_get_contents($file->getRealPath()));
                    $photo->image = $fileName;
                    $photo->save();

                }
            }
        }
    }
}
