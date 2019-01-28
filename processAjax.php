<?php
include_once('includes/dbconnect.php');

 function sendEmail($fromEmail = 'support@lamitubeindia.com', $fromEmailName = 'Support', $toEmail, $toEmailName, $subject = '', $body = '') {
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
            //$headers .= 'Cc: '.$fromEmail.'' . "\r\n";

            return mail($toEmail, $subject, $body, $headers);
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
	

if(!empty($_POST)){
	 $sql = "INSERT INTO contact_us(name,email_address,contact_number,message,is_for_subscribe)
			VALUES ('".$_POST["name"]."','".$_POST["email_address"]."','".$_POST["contact_number"]."','".$_POST["message"]."','".$_POST["is_for_subscribe"]."')";

     $message = '';
     $message .='<table style="font-family: Arial,Helvetica,sans-serif; font-size: 13px; color: #000000; line-height: 22px; width: 600px;" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td style="border-top: 3px solid #a1c13a; height: 3px;" align="center" valign="top">&nbsp;</td>
</tr>
<tr>
<td style="padding: 10px 0;" align="center" valign="middle" width="90"><a href="'.BASE_URL.'" target="_blank" rel="noopener"> <img class="CToWUd" src="'.BASE_URL.'img/hatch_img/logo_transparent.png" alt="Shreeji Enterprises" height="80" /> </a></td>
</tr>
<tr>
<td style="border-bottom: 1px solid #ececec; height: 1px;" align="center" valign="top">&nbsp;</td>
</tr>
<tr>
<td style="background-color: #f6f6f6;" align="center" valign="top">
<table style="width: 94%;" cellspacing="12" cellpadding="0">
<tbody>
<tr>
<td style="font-size: 14px; color: #454545; font-weight: bold;" align="left" valign="middle" height="30">Hello,</td>
</tr>
  <tr>
<td style="font-size: 14px; color: #454545; font-weight: bold;" align="left" valign="middle" height="30">Contact ticket raised '.(!empty($_POST["name"])?'by '.$_POST["name"]:'').' ,The ticket details are shown below for your reference:</td>
</tr>
<tr>
<td style="font-size: 14px; color: #454545; line-height: 24px; padding-bottom: 10px;" align="left" valign="top">
<table style="font-family: Arial,Helvetica,sans-serif; font-size: 13px; color: #000000; line-height: 22px; width: 600px;" cellspacing="0" cellpadding="0" align="center">';
if(!empty($_POST["name"])){
	$message .= "<tr><td>Name</td><td>" . $_POST["name"] . "</td></tr>";
}
if(!empty($_POST["email_address"])){
	$message .= "<tr><td>Email address</td><td>" . $_POST["email_address"] . "</td></tr>";
}
if(!empty($_POST["contact_number"])){
	$message .= "<tr><td>Contact Number</td><td>" . $_POST["contact_number"] . "</td></tr>";
}
if(!empty($_POST["message"])){
	$message .= "<tr><td>Message</td><td>" . $_POST["message"] . "</td></tr>";
}

$message .='</table></td>
</tr>
<tr>
<td style="border-top: 1px solid #e1e1e1; height: 1px;" align="center" valign="top">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="background-color: #8cb53f; padding: 20px 0; text-transform: uppercase; font-weight: bold;" align="center" valign="top"><strong style="color: #3c4d1b;">If you have any queries, feedback and suggestions,<br />please feel free to write to us at <a style="color: #ffffff; text-decoration: none;" href="mailto:support@lamitubeindia.com" target="_blank" rel="noopener">support@lamitubeindia.com</a></strong></td>
</tr>
<tr>
<td style="width: 94%; padding: 0 20px;">
<table style="width: 94%;" cellspacing="12" cellpadding="0">
<tbody style="font-size: 14px; color: #454545;">
<tr>
<td align="left" valign="top">Regards,</td>
</tr>
<tr>
<td align="left" valign="top"><span style="color: #8cb53f; text-transform: uppercase; font-weight: bold;">Team lamitubeindia.com</span></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="border-top: 1px solid #e1e1e1; height: 1px;" align="center" valign="top">&nbsp;</td>
</tr>
<tr>
<td align="center" valign="middle">&nbsp;</td>
</tr>
</tbody>
</table>';
  
	if(mysqli_query($conn, $sql)){
		sendEmail($fromEmail = 'support@lamitubeindia.com', $fromEmailName = 'Support', 'info@lamitubeindia.com', 'Info', 'Contact ticket received.', $message);
  
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