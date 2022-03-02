<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $object = $_POST['object'];
    $message = $_POST['message'];

    $formcontent="De: $name \n Message: $message";

    $recipient = "guillaumemengelatte@hotmail.fr";

    $subject = "Guillaume Portfolio $object";

    $mailheader = "De $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur!");
    echo "Merci!";
    echo '<h2>Thanks for posting comment</h2>';
?>