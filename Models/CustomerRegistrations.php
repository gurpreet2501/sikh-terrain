<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class CustomerRegistrations extends Model
{
	protected $table    = 'customer_registrations';
	protected $fillable = ['name','email','phone','event_image'];

}