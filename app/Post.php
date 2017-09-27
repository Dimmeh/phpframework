<?php
/**
 * Created by PhpStorm.
 * User: dimwe
 * Date: 29-8-2017
 * Time: 12:00
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function likes(){
        return $this->hasMany('App\Like', 'post_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')->withTimestamps();
    }

    public function SetContentAttribute($value){
        $this->attributes['content'] = strtolower($value);
    }

    public function getTitleAttribute($value){
        return strtoupper($value);
    }
}