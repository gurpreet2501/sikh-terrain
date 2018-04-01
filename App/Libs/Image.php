<?php 
namespace App\Libs;
use App\Libs\SimpleImage;
/**
* 
*/
class Image 
{
	
	function __construct()
	{
		# code...
	}

	/*
	@@file_path - path to upload file
	*/


	function generate_file_name($path,$size,$hash){
	
		  $img_name = '';
		  $width = '';
		  $height = '';
		  
		  
			if(!empty($size)){
		    $width= $size['width'];
	      $height= $size['height'];
	      $img_name = 'w'.$width.'x'.'h'.$height.'_'.$hash.'.'.$path['extension'];
	    
			}else{
				$img_name = $hash.'.'.$path['extension'];
			}

			
			$data = [
				'img_name' => $img_name,
				'width' => $width,
				'height' => $height
			];

			return  $data;
	}

	function generateImage($size=[],$file_path,$directory,$hash){
		  $img = new SimpleImage();
		  $path = pathinfo($file_path);
		 
	    $data = $this->generate_file_name($path,$size,$hash);
			
	    try{

	         $destinationPath = rtrim($directory,'/').'/';
	         if(file_exists($destinationPath.$data['img_name']))
	         		  throw new \Exception('File '.$data['img_name'].' already exists.');

	         $img->fromFile($file_path)                     // directory_path_to_image
	            ->autoOrient();
	            // ->flip('x');
	           if($size)                               // adjust orientation based on exif data
	            $img->bestFit($data['width'], $data['height']);                          // resize to 320x200 pixels
	            // ->colorize('LightBlue')                      // tint dark blue
	            $img->border('black', 0)                      // add a 10 pixel black border
	            ->toFile($destinationPath.$data['img_name']);  //Second optional parameter if want to convert
	         return $data['img_name']; 
	      }catch(Exception $e){
	        return NULL;
	      }
	}

	function upload($file_path,$sizes_arr,$directory){
		$hash = sha1(time().rand(1,1000)*rand(1,1000));
	   
   		foreach ($sizes_arr as $key => $size) {
   			$this->generateImage($size,$file_path,$directory,$hash);
	 		} //foreach
	 		return $img_name;

	}

	function uploadImagesfromDir($images_path){
		$images_dir_path = rtrim($images_path).'/';
		
		if(!file_exists($images_dir_path))
			return;

		$files = scandir($images_dir_path);
		$filtered_images = array_diff($files, array('.', '..'));
		foreach ($filtered_images as $key => $file) {
			 $file_path = $images_dir_path.$file;
			 
			 if(!file_exists($file_path))
			 	continue;

			 $img_sizes = config('app.image_sizes');
			 $destination_path = config('app.image_destination_path');
			 $this->upload($file_path, $img_sizes, $destination_path);

		}
		
	}

}

