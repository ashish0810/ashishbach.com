<?php

echo "Version 0.6<br />";

if(isset($_POST["message"])) {

    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\r\nEmail: $senderEmail\r\n\r\n$message";

    echo $mailBody . "<br />";

    $pass = mail("ashish0810@yahoo.com", "Message from website Form", $mailBody);
    sleep(1);
    echo $pass;
    if ($pass) {
        header('Location: index.html');
    } else {
        echo $pass . "<br />Failed<br />";
    }
} else {
	echo "There was no content in the message so no email was sent";
}

?>