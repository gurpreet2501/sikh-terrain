<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{ 

    protected $table    = 'students';
    protected $fillable = [];

    function certificates(){
    	return $this->belongsToMany(Certificates::class, 'student_certificates', 'student_id', 'certificate_id');
    }

    function courses(){
    	return $this->belongsToMany(Courses::class, 'student_courses', 'student_id', 'course_id');
    }
}
