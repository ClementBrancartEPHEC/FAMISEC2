<?php
/*$servername = "famisecbtaclem19.mysql.db";
$username = "famisecbtaclem19";
$db = "famisecbtaclem19";
$password = "Brancart18";

@$connect = new mysqli($servername, $username, $password, $db);


// Create connection
if (@$connect = new mysqli($servername, $username, $password, $db)){
    echo "Connected successfully";

    $query = "select username from usersLog where username='bob'";
    $result = mysqli_query($connect, $query);

    $stored_password = mysqli_fetch_assoc($result);
    $password_string = implode(',',$stored_password); //on repasse le tableau en mode string

    echo " -- ".$password_string;
} 

// Check connection
if ($connect->connect_errno) {
    die("Connection failed: " . $connect->connect_error);
} */

$servername = "famisecbtaclem19.mysql.db";
$username = "famisecbtaclem19";
$db = "famisecbtaclem19";
$password = "Brancart18";

@$mysqli = new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_errno) {
    die("Connection failed: " . $connect->connect_error);
} 

$query="update etatmachine SET etat = 'off' WHERE nom='machineUne'";
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

/*while ($row = $result->fetch_assoc()) {
    echo $row["username"];
}*/

$mysqli->close();




