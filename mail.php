<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $object = $_POST['object'];
    $message = $_POST['message'];

    if($_POST["g-recaptcha-response"] != ''){
        // The user solved the recaptcha, now verify it if is a robot using the API.

        $formcontent="De: $name \n Message: $message";

        $recipient = "guillaumemengelatte@hotmail.fr";

        $subject = "Guillaume Portfolio $object";

        $mailheader = "De $email \r\n";
        mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur!");
        echo "Merci!";
        echo '<h2>Merci pour votre message !</h2>';
    }else{
        echo "Mail non envoyé \r";
        echo "veillez cocher le captcha avant d'envoyer votre mail! \r";

        echo "nom : $name \r";
        echo "email : $email  \r";
        echo "objet : $object  \r";
        echo "message : $message  \r";

        echo '<a href="index.html">Retour</a>';
    }
?>