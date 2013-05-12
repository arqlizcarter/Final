<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Why_I_Married_A_Gringo';
    $to = 'arqlizcarter@gmail.com'; 
    $subject = $_POST['subject'];
    $human = $_POST['human'];
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if ($_POST['submit'] && $human == '12') {
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '12') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>