<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class CoursePages extends Model
{ 

    protected $table    = 'course_pages';
    protected $fillable = ['course_title','course_slug','course_desc'];
 
}
