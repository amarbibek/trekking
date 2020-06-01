<?php
//include("../head.php");
//include("../menubar.php");
include("../connect.php");
?>
<?php
session_start();
//$email=$_SESSION['from'];
//session_destroy();
?>
<?php
if(isset($_POST['send_email'])){
	$name=$_POST['s_name'];
	$email=$_POST['s_email'];
	$text=$_POST['s_comment']; 
	$id=$_SESSION['package_id'];
	$package_name=$_SESSION['package_name'];

//$to= $_POST['id'];
//header('location:email_call_for_interview/index.php');
}
?>


<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'enter_your_email';          // SMTP username
$mail->Password = 'enter_password'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

//$mail->setFrom('kumar.bee014@gmail.com', 'job portal');
$mail->setFrom($email, 'Trek ');
//$mail->addReplyTo('kumar.bee014@gmail.com', 'job portal');
$mail->addReplyTo('enter_your_email', 'Trek ');
$mail->addAddress($to);  // change to to dynamic receiver email
// $mail->addAddress('kumar.bee014@gmail.com');
// $mail->addAddress('wanjirucharity01@hotmail.com'); // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>A query from : '.$name."</h3><br/>";
$bodyContent .= 'Regarding package '.$id."-".$package_name."<br/>";
$bodyContent .= $text."<br/>";
// $bodyContent .='Sender'. $email."<br/>";


$mail->Subject = 'A Query From '. $name;
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<h4>Query has been sent to Admin email id. Please wait for his response!</h4>';
    echo '<a href="../index.php">Goto home</a>';
}
?>
