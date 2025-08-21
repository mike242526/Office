<?php 

    $to = "burhanana@gmail.com"; // this is your Email address
    $from = $_POST['username']; // this is the sender's name
    $ph = $_POST['phone'];
    $first_name = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $from . "\n". $ph . " wrote the following:" . "\n" . $_POST['key1'].$_POST['key2'].$_POST['key3'].$_POST['key4'].$_POST['key5'];
    $message2 = "Here is a copy of your message " . $first_name ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
   header('Location: my-account.html');
    // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.

?>