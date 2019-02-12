<?php
if((isset($_POST['cname'])&&isset($_POST['contact'])) {
	$name = $_POST['cname'];
	$contact = $_POST['contact'];
	$to = 'info@applerepairs.in';
	$subject = "new subscriber";
	$body = '<html>
				<body>
					<h2> form filled  applerepairs.in  </h2>
					<hr>
					<p> Name <br>'.$cname.'</p>
					<p> contact <br>'.$contact.'</p>
				</body>
			</html>';
//headers
			$headers = "Form:".$name." <".$contact.">\r\n";
			$headers = "Reply-To: ".$contact."\r\n";
			$headers = "MIME-Version: 1.0\r\n";
			$headers = "Content-type: text/html; charset-utf-8";
//send
			$send = mail($to, $subject, $body, $headers);
			if($send) {
				echo "<br>";
				echo "Thanks for contacting me. i will be with you shortly";
			} else {
				echo "error";
			}
		}
	?>