<?php
 
$servername = "famisecbtaclem19.mysql.db";
$username = "famisecbtaclem19";
$db = "famisecbtaclem19";
$password = "Brancart18";

@$connect = new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_errno) {
    die("Connection failed: " . $connect->connect_error);
}  

/* $connect=mysqli_connect('localhost','root','','famisecbtaclem19');
      
if(!$connect){
    die('regarder à votre connection'.mysqli_error($connect));
} */


?>