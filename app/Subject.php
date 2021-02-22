<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
      'subject_name','subject_code','cradit','semester_id','department_id',
    ];

    public function department(){
      return $this->belongsTo('App\Department');
    }

    public function semester(){
      return $this->belongsTo('App\Semester');
    }
}
