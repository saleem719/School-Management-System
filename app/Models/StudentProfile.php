<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentProfile extends Model
{
    use HasFactory;

    protected $table = 'student_profiles';

    protected $fillable = [
        'student_id',
        'father_name',
        'city',
        'photo',
        'phone',
    ];

    public function student(){

        return $this->belongsTo('App\Models\Student');
            
        }
}
