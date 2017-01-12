<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = ['title', 'text', 'text2', 'image', 'is_published'];

    /**
     * Add file name to database, add file to storage, save all.
     *
     * @param type $request
     */
    public function addImage($request)
    {
        if ($request->file('image')->isValid()) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $this->id.'.'.$extension;
            Storage::put('banners/'.$fileName, file_get_contents($request->file('image')->getRealPath()));

            $this->image = $fileName;
            $this->save();
        }
    }

    public function deleteImage($filename)
    {
        $path = 'banners/'.$filename;
        if (Storage::has($path)) {
            Storage::delete($path);
        }
    }
}
