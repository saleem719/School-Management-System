<?php

namespace App\Models;

use App\Models\Attendance;
use App\Models\StudentProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'age',
        'Subject',
    ];
 
    /**
     * Get the profile associated with the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Models\StudentProfile');
    }

    /**
     * Get the user associated with the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function attendane()
    {
        return $this->hasOne('App\Models\Attendance');
    }
}
