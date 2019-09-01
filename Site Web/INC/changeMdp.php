<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

if(isset($_POST['change'])){

    if(!empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['newPassword']) && isset($_POST['checkMdp'])){
        
        $passWD = password_hash($_POST['newPassword'], PASSWORD_BCRYPT, array('cost' => 12));
        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);

        $stmt = $mysqli->prepare("select password FROM userslog WHERE username=? AND adresse_mail =?");

        $stmt->bind_param("ss", $username, $mail);
        $stmt->execute();
        $stmt->bind_result($stored_pswd);
        $stmt->fetch();
        $stmt->close();

/**
 * Si le résultat de pswd est vide alors on va envoyer un message d'erreur, si pas le mdp est changé
*/

        if(empty($stored_pswd)){

            header("location:../Nav/forgotCompte.php?Empty2= vérifier les champs utilisateur et adresse mail");

        }else{

            if(strlen($_POST['newPassword']) < 4) {
                header("location:../Nav/forgotCompte.php?Empty2= Plus de 4 caractères pour le mot de passe");
            } else {
  
                $stmt = $mysqli->prepare("update userslog set password=? where username=? AND adresse_mail=?");

                $stmt->bind_param("sss", $passWD, $username, $mail);
                $stmt->execute();
                $stmt->close();

            header("location:../Nav/forgotCompte.php?Empty2= Mot de passe modifié");
            }
        }
    
    } else {

        header("location:../Nav/forgotCompte.php?Empty2= remplir les champs vides");

    } 

}
$mysqli->close();

?>