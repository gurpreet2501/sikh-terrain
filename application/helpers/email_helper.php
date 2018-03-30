<?php 

function sendMail($data){

	$ci = &get_instance();
	$student = getCardDetails($data['card_no']);
	$msg = getMsgString($student);
	$ci->load->library('email');
	$ci->email->from('info@devstairs.com', 'DevStairs');
	$ci->email->to(' ');
	$ci->email->subject('Email Test');
	$ci->email->message($msg);
	$ci->email->send();
}

function getCardDetails($cardNo){
	$card = Models\Cards::where('card_no', $cardNo)->first();
    return Models\Students::where('card_id', $card->id)->with('classes')->first();
}

function getMsgString($student){
	$message = "Person Marked Attendence. Credentials Shown Below:</br>";
	$message .= 'Name : '.$student->name."</br>";
	$message .= 'Class : '.$student->classes->name."</br>";
	return $message;
}