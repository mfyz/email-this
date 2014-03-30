<?php
die("string");
// libs
include('functions.php');

// params
$data = $_POST[email_this];

// basic control
if( empty($data[name]) || empty($data[email]) ) die('E1');
// url decode
$data[url]   = urldecode($data[url]);
$data[title] = urldecode($data[title]);
$data[desc]  = urldecode($data[desc]);
$data[image] = urldecode($data[image]);



// template data set
$templatedata = array(
	'NAME' => $data[name],
	'URL'  => $data[url]
);
if( $data[title] ) $templatedata[TITLE] = $data[title];
if( $data[desc] )  $templatedata[DESC]  = $data[desc];
if( $data[image] ) $templatedata[CONTENT_IMAGE] = $data[image];

// building mail template 
$subject = "Your friend $data[name] suggest you a page";
$body = build_template($templatedata);


// mailer
include("mailer/phpmailer.php");
$mail = new PHPMailer();
$mail->set('ReplyTo', array(array($data[email], $data[name])));
// message
$mail->Subject = $subject;
$mail->Body = $body;
$mail->IsHTML(true);


// sending
if( $data[recipients] ){
	$success = 0;
	foreach ($data[recipients] as $recipient){
		if( $recipient[email] ){
			$mail->ClearAddresses();
			// setting target
			$mail->AddAddress($recipient[email], $recipient[name]);
			// sending
			if( $mail->Send() ){
				$success++;
			}
		}
	}
	if( $success > 0 ){
		die('OK');
	}else{
		die('E2');
	}
}else{
	die('E3');
}



?>