<?php

$servername2 = "xxxxxxxxxxxx";
$username2 = "xxxxxxxxxxx";
$db2 = "xxxxxxxxxxxx";
$password2 = "xxxxxxxxxxxx";

@$mysqli2 = new mysqli($servername2, $username2, $password2, $db2);

if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli2->connect_error);
}  

////---------------------------------MACHINE UNE(porte)----------------------------------------------


    $queryPorteUneData = "SELECT porte from etatmachine WHERE nom='machineUne'";
    if (!$dataPorte1 = $mysqli2->query($queryPorteUneData)) {
        // Oh non ! La requête a échoué. 
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
        exit;
    }

    $dataPorte1 = mysqli_query($mysqli2, $queryPorteUneData);
    $dataPrePorte1 = mysqli_fetch_assoc($dataPorte1);
    $dataPorte1 = implode(',',$dataPrePorte1); //on repasse le tableau en mode string

    if($dataPorte1 === 'ouverte' || $dataPorte1 === 'fermee'){

        $updatePorteUne = "UPDATE `etatmachine` SET `porte`='".$dataPorte1."' WHERE `nom`= 'machineUne' ";
        if (!$newPorte1 = $mysqli->query($updatePorteUne)) {
            // Oh non ! La requête a échoué. 
            header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
            exit;
        }
        $newPorte1 = mysqli_query($mysqli, $updatePorteUne);
    } else {
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
    }

//---------------------------------MACHINE UNE(fonction)----------------------------------------------

    $queryFonctionUneData = "SELECT fonction from etatmachine WHERE nom='machineUne'";

    if (!$dataFonction1 = $mysqli2->query($queryFonctionUneData)) {
        // Oh non ! La requête a échoué. 
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
        exit;
    }

    $dataFonction1 = mysqli_query($mysqli2, $queryFonctionUneData);
    $dataPreFonction1 = mysqli_fetch_assoc($dataFonction1);
    $dataFonction1 = implode(',',$dataPreFonction1); //on repasse le tableau en mode string

    if($dataFonction1 === 'enCours' || $dataFonction1 === 'libre'){

        $updateFonctionUne = "UPDATE `etatmachine` SET `fonction`='".$dataFonction1."' WHERE `nom`= 'machineUne' ";
        if (!$newFonction1 = $mysqli->query($updateFonctionUne)) {
            // Oh non ! La requête a échoué. 
            header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
            exit;
        }
        $newFonction1 = mysqli_query($mysqli, $updateFonctionUne);
    } else {
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
    }
    

?>
