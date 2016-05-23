<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
	protected $table = 'photographies';

    protected $fillable = ['image', 'gallery_id', 'isPublished', 'published_at'];

    public function gallery()
    {
        return $this->belongsTo('App\Gallery');
    }
}
