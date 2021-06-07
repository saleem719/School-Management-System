<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';


  /**
   * Get the Student that owns the Attendance
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function student(){

      return $this->belongsTo('App\Models\Student');
  }





}
