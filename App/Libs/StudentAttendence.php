<?php 
 namespace App\Libs;
 use Models;
 use App\Response\Factory as Resp;
 class StudentAttendence
 {


    public function __construct()
  { 
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
 }

 	
 	// function __construct(argument)
 	// {
 	// 	# code...

 	// }


  public static function markAttendence($card){
       
    
    $student = StudentAttendence::getStudentInfo($card);

    if(!count($student))
      Resp::errorCode(106);      

    Models\Attendence::create([
        'student_id' => $student->id,
        'school_id' => $student->school_id,
        'card_id'   => $card->id,
        'attendence_date'   => date('Y-m-d H:i:s'),
      ]);
    
    return true;

  } 

  public static function checkIfEntryAlreadyExits($card,$user_id){
   
    return  Models\Attendence::
                       where('card_id', $card->id)
                       ->where('school_id', $user_id)
                       ->where('attendence_date', '>=', date('Y-m-d 00:00:00'))
                       ->where('attendence_date', '<=', date('Y-m-d 23:59:59'))
                       ->count();

  }


  public static function getStudentInfo($card){
      $resp = Models\Students::where('card_id', $card->id)->first();
      if(empty($resp))
        return [];
      return $resp;
  }

  public static function checkIfEnabled($machine){
    
    if($machine->status=='enabled')
      return true;

    return false;
  }

  public static function getCardId($card_no){
  	$card = Models\Cards::where('card_no', $card_no)->first();
  	return $card->id;
  }


public static function toggleStatusAndReturn($card){
   $status = strtolower($card->machine->status);
   if($status == 'disabled'){
     Models\Machines::where('id',$card->machine->id)->update(['status' => 'enabled']);
     return 'Status changed to enabled';
   }

   else{
    
     Models\Machines::where('id',$card->machine->id)->update(['status' => 'disabled']);
     return 'Status changed to disabled';
   }

 }


 }