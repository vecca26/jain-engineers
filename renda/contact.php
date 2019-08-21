<?php

    $to = "jainengineers@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message from Contact page of Your Website";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
	$fields{"phone"} = "phone";
	$fields{"subject"} = "subject";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);
	
	header("Location: thank-you.html")

?>
