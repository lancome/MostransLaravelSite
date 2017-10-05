<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'homepage',
        'published_at',
        'user_id'
    ];

    protected $dates = [
        'published_at'
    ];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    public function scopeHomepage($query)
    {
        $query->where('homepage', '=', 1);
    }

    public function scopeNothomepage($query)
    {
        $query->where('homepage', '=', 0);
    }

    public function setPublishedAtAttribute($date)
    {
//        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
//        $this->attributes['published_at'] = Carbon::parse($date);

        if(Input::get('published_at') > Carbon::now())
        {
            $this->attributes['published_at'] = Carbon::parse($date);
        }
        else
        {
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        }
    }

    public function setUnpublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }



}
