<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

if(isset($_POST['Recup'])){

    if(empty($_POST['mail2'])){

        header("location:../Nav/forgotCompte.php?Empty= remplir le champ email");

    } else {
    
        $query = "select adresse_mail from userslog where adresse_mail='".$_POST['mail2']."'";

        if (!$result = $mysqli->query($query)) {
            // Oh non ! La requête a échoué. 
            echo "Désolé, le site web subit des problèmes.";
            exit;
        }

        $stored_email = mysqli_fetch_assoc($result);
        $email_string = implode(',',$stored_email);

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

            $query = "select username from userslog where adresse_mail='".$_POST['mail2']."'";

            if (!$result = $mysqli->query($query)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
            }
                $stored_username = mysqli_fetch_assoc($result);
                $username_string = implode(',',$stored_username);


                $mail='clem.brancart@gmail.com';
                $sujet='Identifiants famisec.be';
                $messageUsername=$username_string;
                $messageEmail=$email_string;
                    
                $destinataire=$_POST['mail2'];
                $objet="Formulaire de contact";
                $msg="Nouveau message \n
                Destinateur = ".$mail." \n
                sujet = ".$sujet." \n
                Votre mail = ".$messageEmail." \n
                Votre Username = ".$messageUsername."";
                $entete = "From:". $mail." \n Reply-To:". $mail."";
        
                    if(mail($destinataire,$objet,$msg,$entete)){
                        header("location:../Nav/forgotCompte.php?Empty= Username envoyé sur votre adresse (peut se retrouver dans les spams)");
                    } else {
                        header("location:../Nav/forgotCompte.php?Empty= Veuillez rééssayer");
                    }    
        
        }
    
    }
}
$mysqli->close();
?>