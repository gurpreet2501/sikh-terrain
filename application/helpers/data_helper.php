
<?php 

function images(){
    $images = [];
    $images = Models\GalleryImages::get();
    return $images;
                            
                       
}


function getCoursePages(){
  $course_pages = Models\CoursePages::get();
 
  return $course_pages;
}
function getSpecialCourse(){
  $course = Models\CoursePages::where('course_type','special')->first();
  
  return $course;
}

function filterCourseBySlug($slug){
  foreach (getCoursePages() as $key => $course) {
    if($course->course_slug == $slug)
      return $course;
  }
}

function get_slider_images(){
  return Models\GalleryImages::where('slide_type','slider')->get();
}

function generateSeoURL($string, $wordLimit = 0){
    $separator = '-';
    
    if($wordLimit != 0){
        $wordArr = explode(' ', $string);
        $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
    }

    $quoteSeparator = preg_quote($separator, '#');

    $trans = array(
        '&.+?;'                    => '',
        '[^\w\d _-]'            => '',
        '\s+'                    => $separator,
        '('.$quoteSeparator.')+'=> $separator
    );

    $string = strip_tags($string);
    foreach ($trans as $key => $val){
        $string = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $string);
    }

    $string = strtolower($string);

    return trim(trim($string, $separator));
}

function send_email($message){
    $ci = &get_instance();
    $ci->load->library('email');
    $ci->email->from('info@vnrinstitute.com', 'Rajan');
    $ci->email->to('vnrcomputer3@gmail.com');
    // $ci->email->to('vnrcomputer3@gmail.com');
    $ci->email->cc('gurpreet2501@gmail.com');
    // $ci->email->bcc('simran5689@live.com');
    $ci->email->subject('VNR Query');
    $ci->email->message($message);
    $ci->email->send();
}

function uploadImage($file,$folder_name){

     $uploaddir = __DIR__.'/../../assets/images/'.$folder_name.'/';
     $uploadfile = $uploaddir . basename($file['name']);
     
     return (bool)move_uploaded_file($file['tmp_name'], $uploadfile);      
}