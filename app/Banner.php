<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Storage;

class Banner extends Model
{
    private static $imagePath = '/public/gallery/banner/';

    protected $table = 'banners';

    protected $fillable = ['title', 'text', 'text2', 'image', 'isPublished'];

    public function addImage($request)
    {
        if ($request->file('image')->isValid())
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            
            do{//in the future this loop could throw exception when disk is full
                    $fileName = rand(111111,999999).'.'.$extension; // renaming image
                    $isFileExist = file_exists(base_path() . self::$imagePath . $fileName);
            }while($isFileExist == true);

            $request->file('image')->move(base_path() . self::$imagePath, $fileName);
            //Storage::put($fileName, file_get_contents($request->file('image')));
            $this->image = $fileName;
            $this->save();
        }
    }

    public static function deleteImage($id)
    {
        $filename = Banner::where('id', '=',$id)->first()->image;
        if($filename != "")
            unlink(base_path() . self::$imagePath . $filename);
    }

}
