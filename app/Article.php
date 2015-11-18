<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'isPublished', 'published_at'];

    /**
     * Allows to use ->format() on published_at.
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * scope published() shows all articles published before Carbon::now().
     * @param  [type] $query [description]
     * @return [type]        [description]
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    
    /**
     * Mutator allows to set published_at.
     * @param [type] $date [description]
     */
    public function setPublishedAtAttribute($date) 
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * An article is owned by a user
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
