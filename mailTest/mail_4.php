<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
<form method="post" action="mail_4.php">

    <fieldset>
        <legend>Formulaire</legend> <!-- Titre du fieldset -->

        <label for="exped">Adrs expediteur</label>
        <input type="text" name="exped" id="exped" /><br><br>

        <label for="sujet">sujet:</label>
        <input type="text" name="sujet" id="sujet" /><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="8" cols="45"></textarea><br><br>

        <input type="submit" value="envoyer" />

    </fieldset>
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Clemb
 * Date: 05-03-18
 * Time: 11:27
 */

$mail = 'clem.brancart@gmail.com'; // Déclaration de l'adresse de destination.
$mail2 = $_POST['exped'];
$passage_ligne = "\r\n";

//Déclaration des messages au format texte et au format HTML.
//$message_txt = "voici un e-mail envoyé par un script PHP.";
//$message_html = "<html><head></head><body><b>bonjour</b><br><br> voici mon mail << structuré >>. <br><br> bat.man.<br><br>ps:voici <a href='https://193.190.65.92/HE201330/2_SITEX/phase_00/index.php'>mon_site</a></body></html>";
$message_html = $_POST['message'];
//Création de la boundary
$boundary = "-----=".md5(rand());

//Définition du sujet.
$sujet = $_POST['sujet'];

//Création du header de l'e-mail adrs expéditeur.
$header = "From: \"HE201330\"<".$_POST['exped'].">".$passage_ligne;
$header.= "Reply-to: \"HE201330\" <".$_POST['exped'].">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//Création du header de l'e-mail adrs destinataire.
$header2 = "From: \"clemB\"<clem.brancart@gmail.com>".$passage_ligne;
$header2.= "Reply-to: \"clemB\" <clem.brancart@gmail.com>".$passage_ligne;
$header2.= "MIME-Version: 1.0".$passage_ligne;
$header2.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;

//Ajout du message au format texte.
//$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
//$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
//$message.= $passage_ligne.$message_txt.$passage_ligne;

//$message.= $passage_ligne."--".$boundary.$passage_ligne;

//Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;


//Envoi de l'e-mail.
if(mail($mail,$sujet,$message,$header))
{
    echo "ça marche--";
}
else
{
    echo "ça marche pas--";
}
if(mail($mail2,$sujet,$message,$header2))
{
    echo "deuxième mail marche";
}
else
    {
        echo "deuxième mail marche pas";
    }

?>