<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;
    protected $fillable = ['title','user_id','description'];

      protected $hidden = [

    ];

 //    public function user(){
 //    return $this->belongsTo('App\User');
	// }

	public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id' );
    }



    public function galleries(){
        return $this->hasMany( Gallery::class, 'post_id', 'id' );
    }

}


