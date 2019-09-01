<?php
require_once('connect.php');

@$mysqli = new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_errno) {
    die("Connection failed: " . $connect->connect_error);
} 

$pseudo = htmlspecialchars($_POST['name']);

if(strlen($pseudo) <= 4) {
    echo "chaine de caractere trop petite";
}

$stmt = $mysqli->prepare("select username from userslog where username=?");
$stmt->bind_param("s", $pseudo);
$stmt->execute();

/* Lecture des variables résultantes */
$stmt->bind_result($username);

/* Récupération des valeurs */
$stmt->fetch();

$stmt->close();

if(empty($username)){
    echo "-2-résultat obtenu est vide -3- mail rentré : ".$pseudo;
}else{
echo "-2-résultat obtenu: ".$username."-3- mail rentré : ".$pseudo;
}
/* Fermeture du traitement */
//$stmt->close();

?>