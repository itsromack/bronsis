<?php
$sender_name = $_POST['sender_name'];
$email_to = "info@bronsis.ph, romacknatividad@gmail.com, winyambot@yahoo.com";
$email_from = $_POST['email_from'];
$message = $_POST["message"];
$email_content = date("m-d-Y H:i:s") . "

{$message}

From: {$sender_name} <{$email_from}>
";
$result = mail('info@bronsis.ph', "Contact Us - Message From " . $sender_name, $message);
header("Location: contact_us.php?s=" . (!$result) ? '0' : '1');
?>