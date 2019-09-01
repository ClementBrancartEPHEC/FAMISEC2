<?php
 
$servername = "xxxxxxxxxxxxxxx";
$username = "xxxxxxxxxxxx";
$db = "xxxxxxxxxx";
$password = "xxxxxxxxxxx";

@$connect = new mysqli($servername, $username, $password, $db);

if ($mysqli->connect_errno) {
    die("Connection failed: " . $connect->connect_error);
}  

/* $connect=mysqli_connect('localhost','root','','famisecbtaclem19');
      
if(!$connect){
    die('regarder à votre connection'.mysqli_error($connect));
} */


?>
