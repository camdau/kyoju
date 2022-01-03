<?php

//1- Configurer les messages en créant des variables

$message_erreur ='Erreur les champs suivants doivent être complétés';

$message_ok = 'Votre message a bien été envoyé';

$message = $message_erreur;

//2- Définir les constantes pour l'envoi d'emails

define('MAIL_EXPEDITEUR', 'camilledauvergne33@gmail.com');
define('MAIL_SUJET', 'Contact site kyoju');

//3- Vérifier les champs du formulaire

if(empty($_POST['name'])){
    $message.=': Le champ nom est vide <br/>';
}

if(empty($_POST['email'])){
    $message.=': Le champ nom est vide <br/>';
}
if(empty($_POST['message'])){
    $message.=': Le champ message est vide <br/>';
}

//4- Vérifier que les champs soient bien remplis 

// si le message final est + long que le message d'erreur de départ =>erreur=>affichage de l'erreur
// On enverra le mail uniquement si tous les champs sont remplis
// strlen() => string lenght => défini le nombre de caractères dans une chaîne

if(strlen($message)> strlen ($message_erreur)){
    // on affiche le message d'erreur
    echo $message;
}
//sinon on crée une variable pour récupérer le contenu des champs

//en enlevant les espaces et les caractères d'échappement => trim()/stripslashes
else {
    foreach ($_POST as $index => $valeur)
    {
        $$index = stripslashes(trim($valeur));
    }
}




// //préparation de l'entête du mail

$mail_entete ="MIME-Version : 1.0\r\n";
$mail_entete.="From: {$_POST['name']}"."<{$_POST['email']}>\r\n";
$mail_entete.='Reply-To:'.$_POST['email']."\r\n";
$mail_entete.='Content-Type: text/plain;charset="UTF-8"';
$mail_entete.="\r\nContent-Transfer-Encocding:8bit\r\n";
$mail_entete.='X-Mailer:PHP/'.phpversion()."\r\n";

//préparation du corps du mail

$mail_corps = "Message de : $name\r\n";
$mail_corps.= "Email: $email\r\n";
$mail_corps.="Message : $message\r\n";

//envoi du mail

if(mail(MAIL_EXPEDITEUR,MAIL_SUJET,$mail_corps,$mail_entete)){
    echo '<script type="text/javascript">
    alert ("Votre email a bien été envoyé");
    window.location="index.php";
    </script>';
}

else {
    echo'erreur';
}