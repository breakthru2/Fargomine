<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($to, $username, $subject, $body){
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com.';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aptechweb2019@gmail.com';                 // SMTP username
    $mail->Password = 'aptech2019';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@fargomine.com.ng', 'Fargo Mine');
    $mail->addAddress($to, $username);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('noreply@fargomine-ng.com', 'Do not reply');
    //$mail->addCC('cc@example.com'); 
    //$mail->addBCC('email@domain.com', '');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = "Sorry, your server does not support HTML";

    $mail->send();
    // echo 'Message has been sent';
    return true;
} 
catch (Exception $e) {
    // echo 'Message could not be sent.';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
    return false;
}
}

// $to = "okocomfortn@gmail.com";
// $username = "Comfort";
// $subject = "Testing";
// $body = "We are testing our service";

// $result = send_mail($to, $username, $subject, $body);

// if ($result == true) {
//     echo "Yes, message has been sent successfully!";
// }else{
//     echo "Message not sent...";
// }
?>
 
