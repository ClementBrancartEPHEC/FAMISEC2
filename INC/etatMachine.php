<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);

    //---------------------------------MACHINE UNE----------------------------------------------


    $queryPorteUne = "SELECT porte from etatmachine WHERE nom='machineUne'";
    if (!$resultPorte1 = $mysqli->query($queryPorteUne)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte1 = mysqli_query($connect, $queryPorteUne);

    $prePorte1 = mysqli_fetch_assoc($resultPorte1);
    $porte1 = implode(',',$prePorte1); //on repasse le tableau en mode string

    $queryFonctionUne = "SELECT fonction from etatmachine WHERE nom='machineUne'";
    if (!$resultFonction1 = $mysqli->query($queryFonctionUne)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction1 = mysqli_query($connect, $queryFonctionUne);

    $preFonction1 = mysqli_fetch_assoc($resultFonction1);
    $fonction1 = implode(',',$preFonction1); //on repasse le tableau en mode string


    //---------------------------------MACHINE DEUX----------------------------------------------

    $queryPorteDeux = "SELECT porte from etatmachine WHERE nom='machineDeux'";
    if (!$resultPort2 = $mysqli->query($queryPorteDeux)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte2 = mysqli_query($connect, $queryPorteDeux);

    $prePorte2 = mysqli_fetch_assoc($resultPorte2);
    $porte2 = implode(',',$prePorte2); //on repasse le tableau en mode string

    $queryFonctionDeux = "SELECT fonction from etatmachine WHERE nom='machineDeux'";
    if (!$resultFonction2 = $mysqli->query($queryFonctionDeux)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction2 = mysqli_query($connect, $queryFonctionDeux);

    $preFonction2 = mysqli_fetch_assoc($resultFonction2);
    $fonction2 = implode(',',$preFonction2); //on repasse le tableau en mode string

    //---------------------------------MACHINE TROIS----------------------------------------------

    $queryPorteTrois = "SELECT porte from etatmachine WHERE nom='machineTrois'";
    if (!$resultPorte3 = $mysqli->query($queryPorteTrois)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte3 = mysqli_query($connect, $queryPorteTrois);

    $prePorte3 = mysqli_fetch_assoc($resultPorte3);
    $porte3 = implode(',',$prePorte3); //on repasse le tableau en mode string

    $queryFonctionTrois = "SELECT fonction from etatmachine WHERE nom='machineTrois'";
    if (!$resultFonction3 = $mysqli->query($queryFonctionTrois)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction3 = mysqli_query($connect, $queryFonctionTrois);

    $preFonction3 = mysqli_fetch_assoc($resultFonction3);
    $fonction3 = implode(',',$preFonction3); //on repasse le tableau en mode string

    //---------------------------------MACHINE QUATRE----------------------------------------------

    $queryPorteQuatre = "SELECT porte from etatmachine WHERE nom='machineQuatre'";
    if (!$resultPorte4 = $mysqli->query($queryPorteQuatre)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte4 = mysqli_query($connect, $queryPorteQuatre);

    $prePorte4 = mysqli_fetch_assoc($resultPorte4);
    $porte4 = implode(',',$prePorte4); //on repasse le tableau en mode string

    $queryFonctionQuatre = "SELECT fonction from etatmachine WHERE nom='machineQuatre'";
    if (!$resultFonction4 = $mysqli->query($queryFonctionQuatre)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction4 = mysqli_query($connect, $queryFonctionQuatre);

    $preFonction4 = mysqli_fetch_assoc($resultFonction4);
    $fonction4 = implode(',',$preFonction4); //on repasse le tableau en mode string

    //---------------------------------MACHINE CINQ----------------------------------------------

    $queryPorteCinq = "SELECT porte from etatmachine WHERE nom='machineCinq'";
    if (!$resultPorte5 = $mysqli->query($queryPorteCinq)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte5 = mysqli_query($connect, $queryPorteCinq);

    $prePorte5 = mysqli_fetch_assoc($resultPorte5);
    $porte5 = implode(',',$prePorte5); //on repasse le tableau en mode string

    $queryFonctionCinq = "SELECT fonction from etatmachine WHERE nom='machineCinq'";
    if (!$resultFonction5 = $mysqli->query($queryFonctionCinq)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction5 = mysqli_query($connect, $queryFonctionCinq);

    $preFonction5 = mysqli_fetch_assoc($resultFonction5);
    $fonction5 = implode(',',$preFonction5); //on repasse le tableau en mode string

    //---------------------------------MACHINE SIX----------------------------------------------

    $queryPorteSix = "SELECT porte from etatmachine WHERE nom='machineSix'";
    if (!$resultPorte6 = $mysqli->query($queryPorteSix)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte6 = mysqli_query($connect, $queryPorteSix);

    $prePorte6 = mysqli_fetch_assoc($resultPorte6);
    $porte6 = implode(',',$prePorte6); //on repasse le tableau en mode string

    $queryFonctionSix = "SELECT fonction from etatmachine WHERE nom='machineSix'";
    if (!$resultFonction6 = $mysqli->query($queryFonctionSix)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction6 = mysqli_query($connect, $queryFonctionSix);

    $preFonction6 = mysqli_fetch_assoc($resultFonction6);
    $fonction6 = implode(',',$preFonction6); //on repasse le tableau en mode string

    //---------------------------------MACHINE SEPT----------------------------------------------

    $queryPorteSept = "SELECT porte from etatmachine WHERE nom='machineSept'";
    if (!$resultPorte7 = $mysqli->query($queryPorteSept)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte7 = mysqli_query($connect, $queryPorteSept);

    $prePorte7 = mysqli_fetch_assoc($resultPorte7);
    $porte7 = implode(',',$prePorte7); //on repasse le tableau en mode string

    $queryFonctionSept = "SELECT fonction from etatmachine WHERE nom='machineSept'";
    if (!$resultFonction7 = $mysqli->query($queryFonctionSept)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction7 = mysqli_query($connect, $queryFonctionSept);

    $preFonction7 = mysqli_fetch_assoc($resultFonction7);
    $fonction7 = implode(',',$preFonction7); //on repasse le tableau en mode string

    //---------------------------------MACHINE HUIT----------------------------------------------

    $queryPorteHuit = "SELECT porte from etatmachine WHERE nom='machineHuit'";
    if (!$resultPorte8 = $mysqli->query($queryPorteHuit)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultPorte8 = mysqli_query($connect, $queryPorteHuit);

    $prePorte8 = mysqli_fetch_assoc($resultPorte8);
    $porte8 = implode(',',$prePorte8); //on repasse le tableau en mode string

    $queryFonctionHuit = "SELECT fonction from etatmachine WHERE nom='machineHuit'";
    if (!$resultFonction8 = $mysqli->query($queryFonctionHuit)) {
        // Oh non ! La requête a échoué. 
        echo "Désolé, le site web subit des problèmes.";
        exit;
    }
    $resultFonction8 = mysqli_query($connect, $queryFonctionHuit);

    $preFonction8 = mysqli_fetch_assoc($resultFonction8);
    $fonction8 = implode(',',$preFonction8); //on repasse le tableau en mode string


?>