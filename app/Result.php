<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
      'roll','semester_id','subject_id','marks','point'
    ];

    public function subject(){
      return $this->belongsTo("App\Subject");
    }

    public function semester(){
      return $this->belongsTo("App\Semester");
    }
}
