<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    // dinh nghia 1 phuong thuc de noi len moi quan he voi bang posts
    public function post()
    {
    	return $this->belongsTo('App\Model\Post');
    }
}
