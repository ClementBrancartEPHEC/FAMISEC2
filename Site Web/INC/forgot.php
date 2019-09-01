<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

if(isset($_POST['Recup'])){

    if(empty($_POST['mail2'])){

        header("location:../Nav/forgotCompte.php?Empty= remplir le champ email");

    } else {

        $mail2 = htmlspecialchars($_POST['mail2']);

        $stmt = $mysqli->prepare("select adresse_mail from userslog where adresse_mail=?");
        $stmt->bind_param("s", $mail2);
        $stmt->execute();
        $stmt->bind_result($stored_email);
        $stmt->fetch();
        $stmt->close();

/**
 * Si le résultat de email est vide alors on va envoyer un message d'erreur
*/    
        if(empty($stored_email)){

            header("location:../Nav/forgotCompte.php?Empty= adresse email inconnue");

        } 
    
/*
 * Alors si toutes les conditions sont passées un mail est envoyé avec les identifiants
*/     
        else { 

            $stmt = $mysqli->prepare("select username from userslog where adresse_mail=?");

            $stmt->bind_param("s", $mail2);
            $stmt->execute();
            $stmt->bind_result($stored_username);
            $stmt->fetch();
            $stmt->close();


            $mail='HE201330@students.ephec.be';
            $sujet='Identifiants famisec.be';
            $messageUsername=$stored_username;
            $messageEmail=$stored_email;
                    
            $destinataire=$_POST['mail2'];
            $objet="Identifiants famisec.be";
            $msg="Nouveau message \n
            Destinateur = ".$mail." \n
            sujet = ".$sujet." \n
            Votre mail = ".$messageEmail." \n
            Votre Username = ".$messageUsername."";
            $entete = "From:". $mail." \n Reply-To:". $mail."";
        
            if(mail($destinataire,$objet,$msg,$entete)){
                header("location:../Nav/forgotCompte.php?Empty= Infos envoyées sur votre adresse");
            } else {
                header("location:../Nav/forgotCompte.php?Empty= Veuillez rééssayer");
            }    
        
        }
    
    }
}
$mysqli->close();
?>