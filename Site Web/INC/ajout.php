<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

if(isset($_POST['Save'])){
    if(empty($_POST['newUser']) || empty($_POST['newPassword']) || empty($_POST['newMail'])){
        header("location:../Nav/newCompte.php?Empty= remplir les champs vides");
    } else {

        $query="select adresse_mail from userslog where adresse_mail='".$_POST['newMail']."'";
        if (!$result = $mysqli->query($query)) {
            // Oh non ! La requête a échoué. 
            echo "Désolé, le site web subit des problèmes.";
            exit;
        }

        $stored_mail = mysqli_fetch_assoc($result);

/**
 * Si le résultat de adresse_mail est vide alors on va créer l'utilisateur
*/    
        if(empty($stored_mail)){
        //echo "n'existe pas et va etre enregistré";
            if($_POST['newUser']==='admin'){

                header("location:../Nav/newCompte.php?Empty= Ce username ne peut être assigné à votre adresse");

            } else {

            $passWD = password_hash($_POST['newPassword'], PASSWORD_BCRYPT, array('cost' => 12));

            

            $query="INSERT INTO userslog VALUES('".$_POST['newUser']."','".$passWD."','".$_POST['newMail']."')";
            if (!$result = $mysqli->query($query)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";

                exit;
            }

            header("location:../Nav/connexion.php?Empty= compte enregistré");

            }

        } 
    
/*
 * Alors si toutes les conditions sont passées c'est que l'utilisateur existe déja
*/     
        else { 

            $mail_string = implode(',',$stored_mail); //on repasse le tableau en mode string
            header("location:../Nav/newCompte.php?Empty= l'adresse mail: ".$mail_string." a déja un pseudo associé");
            
        }
    }
    
}
$mysqli->close();
?>