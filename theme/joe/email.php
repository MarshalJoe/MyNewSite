<?php
$to_email = 'joseph.charles.marshall@gmail.com';
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if(mail($toemail, 'New portfolio site message', $message, 'From: ' . $email)) {
echo 'Your email was sent successfully.';
} else {
echo 'There was a problem sending your email.';
}
?>