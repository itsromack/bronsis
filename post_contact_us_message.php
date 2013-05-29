<?php
$sender_name = "Romack Nativiad";
$email = "romacknatividad@gmail.com";
$message = "HELLO WORLD";
mail('info@bronsis.ph', $sender_name . " <{$email}>", $message);
header("Location: contact_us.php");
?>