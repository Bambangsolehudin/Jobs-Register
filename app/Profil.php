<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id','job_id','NIK', 'pendidikan_terakhir', 'kampus'];

    public function user(){
        return $this->belongsTo( User::class, 'user_id', 'id' );
    } 

}
