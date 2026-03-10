<?php

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/env.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require BASE_PATH . 'includes/phpmailer/PHPMailer.php';
require BASE_PATH . 'includes/phpmailer/SMTP.php';
require BASE_PATH . 'includes/phpmailer/Exception.php';


/* ALLOW ONLY POST REQUEST */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: " . BASE_URL . "pages/contact.php");
    exit();
}


/* SANITIZE FUNCTION */

function clean($data){
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}


/* GET FORM DATA */

$name     = clean($_POST['name'] ?? '');
$email    = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone    = clean($_POST['phone'] ?? '');
$subject  = clean($_POST['subject'] ?? '');
$message  = clean($_POST['message'] ?? '');

$address  = clean($_POST['address'] ?? '');
$city     = clean($_POST['city'] ?? '');
$state    = clean($_POST['state'] ?? '');
$zip      = clean($_POST['zip'] ?? '');


/* HANDLE OTHER SUBJECT */

if ($subject === "Other" && !empty($_POST['other_subject'])) {
    $subject = clean($_POST['other_subject']);
}


/* BASIC VALIDATION */

if(empty($name) || empty($message) || !$email){
    header("Location: " . BASE_URL . "pages/contact.php?contact=invalid");
    exit();
}


/* EMAIL SUBJECT */

$mailSubject = "Website Contact Form - Parrish Family Trucking";


/* TEXT VERSION */

$textBody = "

New Website Message

Name: $name
Email: $email
Phone: $phone

Subject: $subject

Address:
$address
$city, $state $zip

Message:
$message

";


/* HTML VERSION */

$htmlBody = "

<h2>New Website Contact Message</h2>

<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Phone:</strong> $phone</p>

<p><strong>Subject:</strong> $subject</p>

<h3>Address</h3>

<p>
$address<br>
$city, $state $zip
</p>

<h3>Message</h3>

<p>$message</p>

";


/* CREATE MAIL OBJECT */

$mail = new PHPMailer(true);

try {

    /* SMTP SETTINGS (NAMECHEAP) */

    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;

    $mail->CharSet = 'UTF-8';

    /* OPTIONAL DEBUG (turn off in production) */

    // $mail->SMTPDebug = 2;


    /* EMAIL SETTINGS */

    $mail->setFrom('info@parrishft.com', 'Parrish Family Trucking');

    $mail->addAddress('info@parrishft.com');

    $mail->addReplyTo($email, $name);


    /* MESSAGE */

    $mail->Subject = $mailSubject;

    $mail->isHTML(true);
    $mail->Body    = $htmlBody;
    $mail->AltBody = $textBody;


    /* SEND EMAIL */

    $mail->send();


    /* SUCCESS REDIRECT */

    header("Location: " . BASE_URL . "pages/contact.php?contact=success");
    exit();


} catch (Exception $e){

    /* ERROR REDIRECT */

    header("Location: " . BASE_URL . "pages/contact.php?contact=error");
    exit();

}

?>