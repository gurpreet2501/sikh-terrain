<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
	protected $table    = 'cards';
	protected $fillable = ['card_no','type','machine_id','category_id','school_id'];

	function machine(){
		return $this->hasOne(Machines::class, 'id', 'machine_id');
	}

	function student(){
		return $this->hasOne(Students::class, 'id', 'card_id');
	}
}