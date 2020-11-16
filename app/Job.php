<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
	use SoftDeletes;
	protected $fillable = ['title','user_id','description'];

  	protected $hidden = [

	];
	public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id' );
    }

    
}
