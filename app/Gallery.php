<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'post_id', 'image'
    ];

     protected $hidden = [

    ];

    public function post()
    {
    	return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
