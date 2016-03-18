<?php

			$to = $_POST ["email"];
			$subject = "reserve successful";
			$message = "You have reserve the cphne 60 successful!this ia a confirmation email.";
			$from = "kitzzz@hotmail.com";
			$headers = "From: $from";
			mail($to,$subject,$message,$headers);
			echo "<script>alert('sned finished');history.go(-1);</script>";
		
?>