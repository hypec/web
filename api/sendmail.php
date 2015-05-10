<?php 
	$key = md5("FS".date("Y-m-d H"));
	
	if(isset($_POST['key']) == $key){
	
		//var_dump($_POST);
		$username = isset($_POST['username'])?$_POST['username']:"";
		$useremail = isset($_POST['useremail'])?$_POST['useremail']:"";
		$content = isset($_POST['content'])?$_POST['content']:"";
	
	
		if($useremail){
			$to = "info@hypecinc.com";
			$subject = "CONTACT US FORM - HYPEC";
			$txt  = "User Name : $username\n";
			$txt .= "User Email : $useremail\n";
			$txt .= "Content : $content\n\n";
			
			$headers = "From: www.hypecinc.com <info@hypecinc.com>" . "\r\n" .
			"CC: 915981876@qq.com\r\n".
			"CC: dewen.sinocrest@gmail.com\r\n";
	
			mail($to,$subject,$txt,$headers);
		}
	
	}
	
?>	