<?php 
include "db-connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if(isset($_POST['REMEMBER'])){
	$email = $_POST['EMAIL'];
	$query = "SELECT agency_password FROM agency_info WHERE agency_email = '$email'";
	$result = mysql_query($query);
	$row=mysql_fetch_object($result);
	$password = $row->agency_password;
	if( mysql_num_rows( $result ) > 0 )
 		{
 		//php mailer
   		

		$mail = new PHPMailer;
		$mail->isSMTP(); 
		$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
		$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
		$mail->Port = 587; // TLS only
		$mail->SMTPSecure = 'tls'; // ssl is depracated
		$mail->SMTPAuth = true;
		$mail->Username = 'myochitmaung2018@gmail.com';
		$mail->Password = 'myochitmaung12345';
		$mail->setFrom('myochitmaung2018@gmail.com', 'Shwe Myanmar Jobs');//form email
		$mail->addAddress($email, '');//To email
		$mail->Subject = 'Your Password Recover';
		$mail->msgHTML("<h3>Hi, Welcome to our Shwe Myanmar Jobs</h3>
			<br>Your admin password in Shwe Myanmar Jobs Site is <strong>".$password ."</strong> . Please <a href='http://www.shwemyanmarjob.info/'>Login</a>"); 
		//$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
		//$mail->AltBody = 'HTML messaging not supported';
		// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

		if(!$mail->send()){
		    echo "Mailer Error: " . $mail->ErrorInfo;
		    // echo "Mailer Error: ";
		}else{
		    echo "Message sent!";
		}
		//php mailer end
       }
    else
       	{
       		echo "Your email doesn't exit."."<a href='index.php'>Click Here</a>";
       	}
}


?>