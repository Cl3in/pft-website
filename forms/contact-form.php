<?php
if($_POST){

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

mail("info@parrishft.com","Website Message",
"Name:$name\nEmail:$email\nMessage:$msg");

header("Location: ../pages/contact.php?sent=1");
}