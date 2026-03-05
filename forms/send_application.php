<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* LOAD PHPMailer */

require '../includes/phpmailer/PHPMailer.php';
require '../includes/phpmailer/SMTP.php';
require '../includes/phpmailer/Exception.php';


/* ONLY ALLOW POST */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../pages/careers.php");
    exit();
}


/* -------------------------
SPAM PROTECTION (HONEYPOT)
------------------------- */

if (!empty($_POST['company'])) {
    exit();
}


/* -------------------------
SANITIZE FUNCTION
------------------------- */

function clean($data){
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}


/* -------------------------
SANITIZE INPUT
------------------------- */

$first      = clean($_POST['first_name'] ?? '');
$middle     = clean($_POST['middle_name'] ?? '');
$last       = clean($_POST['last_name'] ?? '');

$email      = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone      = clean($_POST['phone'] ?? '');
$birthday   = clean($_POST['driver_birthday'] ?? '');
$gender     = clean($_POST['gender'] ?? '');

$address    = clean($_POST['driver_address'] ?? '');
$city       = clean($_POST['driver_city'] ?? '');
$state      = clean($_POST['driver_state'] ?? '');
$zip        = clean($_POST['driver_zip'] ?? '');

$experience = clean($_POST['experience'] ?? '');
$message    = clean($_POST['message'] ?? '');


if(!$email){
    header("Location: ../pages/careers.php?application=invalid_email");
    exit();
}


/* -------------------------
EMAIL CONTENT
------------------------- */

$subject = "New Driver Application - Parrish Family Trucking";

$textBody = "
New Driver Application Submitted

Name: $first $middle $last
Email: $email
Phone: $phone
Gender: $gender
Date of Birth: $birthday

Address:
$address
$city, $state $zip

Years of Experience: $experience

Experience Details:
$message
";


$htmlBody = "
<h2>New Driver Application Submitted</h2>

<p><strong>Name:</strong> $first $middle $last</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Phone:</strong> $phone</p>
<p><strong>Gender:</strong> $gender</p>
<p><strong>Date of Birth:</strong> $birthday</p>

<h3>Address</h3>

<p>
$address<br>
$city, $state $zip
</p>

<p><strong>Years of Experience:</strong> $experience</p>

<p><strong>Experience Details:</strong><br>$message</p>
";


/* -------------------------
FILE UPLOAD
------------------------- */

$uploadDir = "../uploads/";
$filePath  = "";
$fileName  = "";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if(isset($_FILES['resume']) && $_FILES['resume']['error'] === 0){

    $originalName = $_FILES['resume']['name'];
    $fileTmp      = $_FILES['resume']['tmp_name'];
    $fileSize     = $_FILES['resume']['size'];

    $allowedExt = ['pdf','doc','docx'];
    $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    if(!in_array($ext, $allowedExt)){
        header("Location: ../pages/careers.php?application=invalid_file");
        exit();
    }

    if($fileSize > 5 * 1024 * 1024){
        header("Location: ../pages/careers.php?application=file_too_large");
        exit();
    }

    /* SAFE FILE NAME */

    $safeName = preg_replace("/[^a-zA-Z0-9.]/", "", $originalName);
    $fileName = time() . "_" . $safeName;

    $filePath = $uploadDir . $fileName;

    move_uploaded_file($fileTmp, $filePath);
}


/* -------------------------
SEND EMAIL USING SMTP
------------------------- */

$mail = new PHPMailer(true);

try{

    /* SMTP SETTINGS */

    $mail->isSMTP();
    $mail->Host       = 'mail.parrishft.com';
    $mail->SMTPAuth   = true;

    $mail->Username   = 'operations@parrishft.com';
    $mail->Password   = 'PftNov20@#$';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->CharSet    = "UTF-8";


    /* EMAIL DETAILS */

    $mail->setFrom('no-reply@parrishft.com', 'Parrish Family Trucking');
    $mail->addAddress('operations@parrishft.com');

    $mail->addReplyTo($email, "$first $last");


    $mail->Subject = $subject;

    $mail->isHTML(true);
    $mail->Body    = $htmlBody;
    $mail->AltBody = $textBody;


    /* ATTACH RESUME */

    if($filePath && file_exists($filePath)){
        $mail->addAttachment($filePath);
    }


    $mail->send();

    header("Location: ../pages/careers.php?application=success");
    exit();

}
catch (Exception $e){

    header("Location: ../pages/careers.php?application=error");
    exit();

}
?>