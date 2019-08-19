<?php
require_once('connect.php');
session_start();
@$mysqli = new mysqli($servername, $username, $password, $db);

     if(isset($_POST['Login'])){
         if(empty($_POST['username']) || empty($_POST['password'])){
             header("location:../Nav/connexion.php?Empty= remplir les champs vides");
         }
         else{
             $query = "select password from userslog where username='".$_POST['username']."'";

             $result = mysqli_query($connect, $query);

             $stored_password = mysqli_fetch_assoc($result);
             $password_string = implode(',',$stored_password); //on repasse le tableau en mode string


             if(password_verify($_POST['password'], $password_string)){
                $query="select * from userslog where username='".$_POST['username']."' and password='".$password_string."'";
                $result=mysqli_query($connect,$query);
                
                if(mysqli_fetch_assoc($result)){
                    $_SESSION['username']=$_POST['username'];
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
