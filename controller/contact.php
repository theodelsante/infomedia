<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

    // CONDITIONS NaMe
    if ( (isset($_POST["name"])) && (strlen(trim($_POST["name"])) > 0) ) {
        $name = stripslashes(strip_tags($_POST["name"]));
    } else {
        echo "Merci d'écrire un nom <br />";
        $name = "";
    }

    // CONDITIONS SUbJEcT
    if ( (isset($_POST["subject"])) && (strlen(trim($_POST["subject"])) > 0) ) {
        $subject = stripslashes(strip_tags($_POST["subject"]));
    } else {
        echo "Merci d'écrire un sujet <br />";
        $subject = "";
    }

    // CONDITIONS EMAIL
    if ( (isset($_POST["email"])) && (strlen(trim($_POST["email"])) > 0) && (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) ) {
        $email = stripslashes(strip_tags($_POST["email"]));
    } elseif (empty($_POST["email"])) {
        echo "Merci d'écrire une adresse email <br />";
        $email = "";
    } else {
        echo "Email invalide :(<br />";
        $email = "";
    }

    // CONDITIONS MESSAGE
    if ( (isset($_POST["message"])) && (strlen(trim($_POST["message"])) > 0) ) {
        $message = stripslashes(strip_tags($_POST["message"]));
    } else {
        echo "Merci d'écrire un message<br />";
        $message = "";
    }

// CONDITIONS MESSAGE
    if ( (isset($_POST["human"])) && (strlen(trim($_POST["human"])) > 0) ) {
        $human = "";
    } else {
        echo "Merci de ne pas cocher la boite<br />";
        $human = "robot";
    }

    // Les messages d'erreurs ci-dessus s'afficheront si Javascript est désactivé

    // PREPARATION DES DONNEES
    $ip           = $_SERVER["REMOTE_ADDR"];
    $hostname     = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    $destinataire = "laurensc09@gamil.com";
    $objet        = "[Tourisme Vaise] " . $subject;
    $contenu      = "Nom de l'expéditeur : " . $name . "\r\n";
    $contenu     .= $message . "\r\n\n";
    $contenu     .= "Adresse IP de l'expéditeur : " . $ip . "\r\n";
    $contenu     .= "DLSAM : " . $hostname;

    $headers  = "From: " . $email . " \r\n"; // ici l'expediteur du mail
    $headers .= "Content-Type: text/plain; charset=\"ISO-8859-1\"; DelSp=\"Yes\"; format=flowed /r/n";
    $headers .= "Content-Disposition: inline \r\n";
    $headers .= "Content-Transfer-Encoding: 7bit \r\n";
    $headers .= "MIME-Version: 1.0";

    // SI LES CHAMPS SONT MAL REMPLIS
    if ( (empty($name)) && (empty($subject)) && (empty($email)) && (!filter_var($email, FILTER_VALIDATE_EMAIL)) && (empty($message)) && $human=="robot") {
        echo 'echec :( <br /><a href="contact.html">Retour au formulaire</a>';
    } else {
        // ENCAPSULATION DES DONNEES 
        mail($destinataire, $objet, utf8_decode($contenu), $headers);
        echo 'Formulaire envoyé';
    }

    // Les messages d'erreurs ci-dessus s'afficheront si Javascript est désactivé
?>