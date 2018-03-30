<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table    = 'classes';
	// protected $fillable = ['card_no','type','machine_id','category_id','school_id'];
	function classes(){
		return $this->hasOne(Classes::class, 'id', 'class_id');
	}
}