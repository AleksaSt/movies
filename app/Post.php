<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title', 'body', 'published'];
    
    public static function getPublishedPosts(){

        return self::where('published', true)->get();
    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }
}
