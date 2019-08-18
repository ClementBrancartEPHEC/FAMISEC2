<?php
    
    session_start();
    
    if(isset($_GET['logout'])){
        session_destroy();
        header("location:../Nav/connexion.php");
    } else {
        echo "connectez vous avant de vous déconnecter";
    }

?>