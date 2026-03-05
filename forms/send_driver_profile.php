<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* -----------------------------
LOAD PHPMailer
----------------------------- */

require '../includes/phpmailer/PHPMailer.php';
require '../includes/phpmailer/SMTP.php';
require '../includes/phpmailer/Exception.php';


/* -----------------------------
ALLOW ONLY POST REQUEST
----------------------------- */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../pages/careers.php");
    exit();
}


/* -----------------------------
SPAM PROTECTION (HONEYPOT)
----------------------------- */

if (!empty($_POST['company'])) {
    exit();
}


/* -----------------------------
SANITIZE FUNCTION
----------------------------- */

function clean($data){
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}


/* -----------------------------
SANITIZE FORM DATA
----------------------------- */

$name       = clean($_POST['driver_name'] ?? '');
$email      = filter_var($_POST['driver_email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone      = clean($_POST['driver_phone'] ?? '');
$birthday   = clean($_POST['driver_birthday'] ?? '');

$address    = clean($_POST['driver_address'] ?? '');
$city       = clean($_POST['driver_city'] ?? '');
$state      = clean($_POST['driver_state'] ?? '');
$zip        = clean($_POST['driver_zip'] ?? '');

$experience = clean($_POST['driver_experience'] ?? '');


/* -----------------------------
VALIDATE EMAIL
----------------------------- */

if(!$email){
    header("Location: ../pages/careers.php?driver=invalid_email");
    exit();
}


/* -----------------------------
EMAIL CONTENT
----------------------------- */

$subject = "New Driver Profile Submission";

$textBody = "
New Driver Profile Submission

Name: $name
Email: $email
Phone: $phone
Birthday: $birthday

Address:
$address
$city, $state $zip

Driving Experience: $experience years
";


$htmlBody = "
<h2>New Driver Profile Submission</h2>

<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Phone:</strong> $phone</p>
<p><strong>Birthday:</strong> $birthday</p>

<h3>Address</h3>
<p>
$address<br>
$city, $state $zip
</p>

<p><strong>Driving Experience:</strong> $experience years</p>
";


/* -----------------------------
SMTP MAIL CONFIGURATION
----------------------------- */

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host       = 'parrishft.com';
    $mail->SMTPAuth   = true;

    $mail->Username   = 'operations@parrishft.com';
    $mail->Password   = 'PftNov20@#$';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->CharSet    = "UTF-8";

    /* EMAIL SETTINGS */

    $mail->setFrom('no-reply@parrishft.com', 'Parrish Family Trucking');
    $mail->addAddress('operations@parrishft.com');

    $mail->addReplyTo($email, $name);

    $mail->Subject = $subject;

    $mail->isHTML(true);
    $mail->Body    = $htmlBody;
    $mail->AltBody = $textBody;

    $mail->send();

    header("Location: ../pages/careers.php?driver=success");
    exit();

} catch (Exception $e) {

    header("Location: ../pages/careers.php?driver=error");
    exit();
}

?>