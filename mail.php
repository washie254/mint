<?php 
    if ($_POST['submit']) {	
            $ToEmail = 'washiemugo@gmail.com'; 
            $EmailSubject = 'From Mintari Contact Form'; 
            $mailheader = "From: ".$_POST["email"]."\r\n"; 
            $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
            $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
            $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
            $MESSAGE_BODY = "Subject: ".$_POST["subject"].""; 
            $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
            $MESSAGE_BODY .= "Message ".nl2br($_POST["message"]).""; 
            mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
        ?> 
    Your message was sent
    <?php 
    } else { 
        echo "Message not sent";
    }
?>