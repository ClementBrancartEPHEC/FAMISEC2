<?php
session_start();


if(isset($_POST['Envoi'])){
  
    if(isset($_POST['mail']) && isset($_POST['sujet']) && isset($_POST['message'])){

        $mail=$_POST['mail'];
        $sujet=$_POST['sujet'];
        $message=$_POST['message'];
        $check=$_POST[$_SESSION['confirmation']];

        if(!empty($mail) && !empty($sujet) && !empty($message) && isset($_POST[$_SESSION['confirmation']])){
            
            $destinataire="HE201330@students.ephec.be";
            $objet="Formulaire de contact";
            $msg="Nouveau message \n
            mail = ".$mail." \n
            sujet = ".$sujet." \n
            Message = ".$message."";
            $entete = "From:". $mail." \n Reply-To:". $mail."";

                if(mail($destinataire,$objet,$msg,$entete)){
                    header("location:../Nav/contact.php?Envois= message envoyé");
                } else {
                    header("location:../Nav/contact.php?Envois= Veuillez rééssayer");
                }


        }else{

            header("location:../Nav/contact.php?Empty= vérifier le checkbox du robot et les champs vides");

        }
    }
} 



?>