<?php
 
$servername = "mysql-famisec.alwaysdata.net";
$username = "famisec_btaclem";
$db = "famisec_btaclem19";
$password = "Brancart18";

@$mysqli = new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_errno) {
    die("Connection failed: " . $connect->connect_error);
} 

$query="select nom from etatmachine where nom='machineUne'";
if (!$result = $mysqli->query($query)) {
    // Oh non ! La requête a échoué. 
    echo "Désolé, le site web subit des problèmes.";

    // Denouveau, ne faite pas ceci sur un site public, mais nous vous
    // montrerons comment récupérer les informations de l'erreur
    echo "Error: Notre requête a échoué lors de l'exécution et voici pourquoi :\n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

while ($row = $result->fetch_assoc()) {
        echo $row["nom"];
    }
        
$mysqli->close();

/* $connect=mysqli_connect('localhost','root','','famisecbtaclem19');
      
if(!$connect){
    die('regarder à votre connection'.mysqli_error($connect));
} 









function machine1Porte(){
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
    } 
}

function machine1Fonction(){
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
}

//---------------------------------MACHINE DEUX----------------------------------------------

function machine2Porte(){
    $queryPorteDeuxData = "SELECT porte from etatmachine WHERE nom='machineDeux'";
    if (!$dataPorte2 = $mysqli2->query($queryPorteDeuxData)) {
        // Oh non ! La requête a échoué. 
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
        exit;
    }

    $dataPorte2 = mysqli_query($mysqli2, $queryPorteDeuxData);
    $dataPrePorte2 = mysqli_fetch_assoc($dataPorte2);
    $dataPorte2 = implode(',',$dataPrePorte2); //on repasse le tableau en mode string

    if($dataPorte2 === 'ouverte' || $dataPorte2 === 'fermee'){

        $updatePorteDeux = "UPDATE `etatmachine` SET `porte`='".$dataPorte2."' WHERE `nom`= 'machineDeux' ";
        if (!$newPorte2 = $mysqli->query($updatePorteDeux)) {
            // Oh non ! La requête a échoué. 
            header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
            exit;
        }
        $newPorte2 = mysqli_query($mysqli, $updatePorteDeux);
    } else {
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
    }
}

function machine2Fonction(){
    $queryFonctionDeuxData = "SELECT fonction from etatmachine WHERE nom='machineDeux'";
    if (!$dataFonction2 = $mysqli2->query($queryFonctionDeuxData)) {
        // Oh non ! La requête a échoué. 
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
        exit;
    }

    $dataFonction2 = mysqli_query($mysqli2, $queryFonctionDeuxData);
    $dataPreFonction2 = mysqli_fetch_assoc($dataFonction2);
    $dataFonction2 = implode(',',$dataPreFonction2); //on repasse le tableau en mode string

    if($dataFonction2 === 'enCours' || $dataFonction2 === 'libre'){

        $updateFonctionDeux = "UPDATE `etatmachine` SET `fonction`='".$dataFonction2."' WHERE `nom`= 'machineDeux' ";
        if (!$newFonction2 = $mysqli->query($updateFonctionDeux)) {
            // Oh non ! La requête a échoué. 
            header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
            exit;
        }
        $newFonction2 = mysqli_query($mysqli, $updateFonctionDeux);
    } else {
        header("location:../Nav/surveillance.php?Invalide= Désolé, le site web subit des problèmes.");
    }
}

function testtest(){
    echo "coucouc c'est un test!";
}
*/


?>