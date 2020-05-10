<?php

	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$mail_body="User Name: $name.\n".
				"User Email: $mail.\n".
				"User Subject: $subject.\n".
				"User Message: $message.\n";
	
	$to="apusarkar2195@gmail.com";
	if(empty($name) || empty($mobile) || empty($email) || empty($subject) || empty($message))
	{
		echo"Please fill all the fields..";
	}
	else
	 {
		mail($to,$subject,$mail_body,"From: $name <$email>");
		echo"<script type='text/javascript'>
		alert('your message sent successfully.\nwe will get you soon');
		window.history.log(-1);
		</scritp>";
	 }		 

?>