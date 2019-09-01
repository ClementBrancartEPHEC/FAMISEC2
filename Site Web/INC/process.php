<?php
require_once('connect.php');
session_start();

@$mysqli = new mysqli($servername, $username, $password, $db);

    if(isset($_POST['Login'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            header("location:../Nav/connexion.php?Empty= remplir les champs vides");
        }
        else{
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);

            $stmt = $mysqli->prepare("select password from userslog where username=?");
    
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($stored_password);
            $stmt->fetch();
            $stmt->close();


            if(password_verify($password, $stored_password)){

                $stmt = $mysqli->prepare("select username from userslog where username=? and password=?");

                $stmt->bind_param("ss", $username, $stored_password);
                $stmt->execute();
                $stmt->bind_result($userResult);
                $stmt->fetch();
                $stmt->close();

                //header("location:../Nav/connexion.php?Invalide= resultat =".$userResult."");
                
                if(!empty($userResult)){
                    $_SESSION['username']=$username;
                    header("location:../Nav/surveillance.php");
   
                       if($_SESSION['username']==='admin'){
                           header("location:../Nav/administration.php");
                       }
   
                } else {
                    header("location:../Nav/connexion.php?Invalide= Entrez le bon nom d'utilisateur ou créez un compte");
                }

            } else {
                header("location:../Nav/connexion.php?Invalide= Entrez le bon mot de passe ou créez un compte");
            }
         }
     }
     $mysqli->close();         
?>
