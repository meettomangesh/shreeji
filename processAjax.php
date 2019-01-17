<?php
include_once('includes/dbconnect.php');

public function sendEmail($fromEmail = 'support@shreejienterprises.com', $fromEmailName = 'Support', $toEmail, $toEmailName, $subject = '', $body = '') {
        try {
            /* $mail = new PHPMailer;
              //To address and name
              $mail->addAddress($toEmail, $toEmailName);
              $mail->setFrom($fromEmail, $fromEmailName);
              //Send HTML or Plain Text email
              $mail->isHTML(true);
              $mail->isSMTP();

              $mail->Subject = $subject;
              $mail->Body = $body;
              $mail->AltBody = "This is the plain text version of the email content";

              if (!$mail->send()) {
              return $mail->ErrorInfo;
              } else {
              return 1;
              } */
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            $headers .= "From: ".$fromEmail."" . "\r\n" .
                    "Reply-To: ".$fromEmail."" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();

// More headers
            $headers .= 'From: <'.$fromEmail.'>' . "\r\n";
            $headers .= 'Cc: '.$fromEmail.'' . "\r\n";

            return mail($toEmail, $subject, $body, $headers);
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
	

if(!empty($_POST)){
	 $sql = "INSERT INTO contact_us(name,email_address,contact_number,message,is_for_subscribe)
			VALUES ('".$_POST["name"]."','".$_POST["email_address"]."','".$_POST["contact_number"]."','".$_POST["message"]."','".$_POST["is_for_subscribe"]."')";

          
	if(mysqli_query($conn, $sql)){
		$response['status'] = 'success';
		$response['message'] = 'The message has been submitted successfully.';
	} else {
		$response['status'] = 'error';
		$response['message'] = 'There is problem to send your message, please try again later.';
	}
	
} else {
	$response['status'] = 'error';
	$response['message'] = 'There is problem to send your message, please try again later.';
}
	$conn->close();
	
	echo json_encode($response); 
//print_r($_POST);
?>