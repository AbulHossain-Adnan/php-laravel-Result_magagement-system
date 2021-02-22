<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'name','roll','registration','department_id','session_id','email','phone','fathers_name','mothers_name','picture','address',
    ];

    public function department(){
      return $this->belongsTo('App\Department');
    }

    public function session(){
      return $this->belongsTo('App\Session');
    }
}
