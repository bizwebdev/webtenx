<?php

function sendEmail(){
	
	$subject = 'Re: Background Check FORM from GTA' ;

    $message = "Hi Mayank, \n\nThe background check from Hire Right is completed and they were not able to validate your degree certificate which is mandatory as per client requirement, also we talked to Nissan and shared your degree certificates with them but they are don't want to move forward with you. I'll let you know if we'll have any other postions for you. \n\nThanks, \nShubham Agrawal";

	$message = $message . "\n\n\nOn Mon, January 31, 2023, 11:09 Shubham Agrawal <shubham.agrawal@spicasolutionsllc.com> wrote:\nHi Mayank, \n\nWe are still waiting to get confirmation from Hire Right, They are trying to validate the degree certificates you provided with the university. We'll let you know as soon as we'll get the confirmation but we cannot start without background check completion.\n\n";         

  	$message = $message . "\n\n\nOn Mon, January 30, 2023, 14:57 Mayank Patel <patel.mayank0220@gmail.com> wrote:\nHi Shubham,\n\nI still didnt heard back on laptop and project start date, I was suppose to start from today, please let me know the next steps since I already resigned from my preivous project. \n\nThanks\nMayank";
  	
    $to = "eshu.1505@gmail.com";
	$headers = 'From: Shubham Agrawal <shubham.agrawal@spicasolutionsllc.com>' . PHP_EOL ;
	$result = mail ( $to, $subject, $message, $headers ) ;
  	return $result;

}

sendEmail();

?>