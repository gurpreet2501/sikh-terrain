<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
	protected $table    = 'gallery_images';
	protected $fillable = ['image'];

}