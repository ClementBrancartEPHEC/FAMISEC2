<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

if(isset($_POST['Save'])){

    if(empty($_POST['newUser']) || empty($_POST['newPassword']) || empty($_POST['newMail']) || !isset($_POST['checkNew'])){
        header("location:../Nav/newCompte.php?Empty= remplir les champs vides et confirmer");
    } 
    else {
        $newMail = htmlspecialchars($_POST['newMail']);

        $stmt = $mysqli->prepare("select adresse_mail from userslog where adresse_mail=?");
        $stmt->bind_param("s", $newMail);
        $stmt->execute();
        /* Lecture des variables résultantes */
        $stmt->bind_result($stored_mail);

        /* Récupération des valeurs */
        $stmt->fetch();

        /* On ferme le statement*/
        $stmt->close();


/**
 * Si le résultat de adresse_mail est vide alors on va créer l'utilisateur
*/    
        if(empty($stored_mail)){
        //echo "n'existe pas et va etre enregistré";
            if($_POST['newUser']==='admin' || $_POST['newUser']==='modo'){
                header("location:../Nav/newCompte.php?Empty= Ce username ne peut être assigné à votre adresse");

            } else {

            $passWD = password_hash($_POST['newPassword'], PASSWORD_BCRYPT, array('cost' => 12));
            $newUser = htmlspecialchars($_POST['newUser']);
            $newMail2 = htmlspecialchars($_POST['newMail']);

                if(strlen($newUser) < 4 || strlen($_POST['newPassword']) < 4) {
                    header("location:../Nav/newCompte.php?Empty= Plus de 4 caractères pour le nom d'utilisateur et le mot de passe");
                }else{


                    //$query="INSERT INTO userslog VALUES('".$_POST['newUser']."','".$passWD."','".$_POST['newMail']."')";
                    $stmt = $mysqli->prepare("INSERT INTO userslog VALUES(?,?,?)");
                    $stmt->bind_param("sss", $newUser,$passWD,$newMail2);
                    $stmt->execute();

                    $stmt->close();


                    header("location:../Nav/connexion.php?Empty= compte enregistré");
                    
                }

            }

        } 
    
/*
 * Alors si toutes les conditions sont passées c'est que l'utilisateur existe déja
*/     
        else { 

            //$mail_string = implode(',',$stored_mail); //on repasse le tableau en mode string
            header("location:../Nav/newCompte.php?Empty= l'adresse mail: ".$mail_string." a déja un pseudo associé");
            
            
        }
    } 
    
}
$mysqli->close();
?>