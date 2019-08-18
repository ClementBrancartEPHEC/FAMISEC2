<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

if(isset($_POST['change'])){

    if(!empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['newPassword'])){
    
        //echo "fais tes query mtn";
        $passWD = password_hash($_POST['newPassword'], PASSWORD_BCRYPT, array('cost' => 12));

        $query = "update userslog set password='".$passWD."' where username='".$_POST['username']."' AND adresse_mail='".$_POST['mail']."'";
        
        if (!$result = $mysqli->query($query)) {
            // Oh non ! La requête a échoué. 
            echo "Désolé, le site web subit des problèmes.";
            exit;
        }

        header("location:../Nav/forgotCompte.php?Empty2= Mot de passe modifié");
    
    } else {

        header("location:../Nav/forgotCompte.php?Empty2= remplir les champs vides");

    } 

}
$mysqli->close();
?>