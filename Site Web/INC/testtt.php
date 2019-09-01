<?php

session_start();

if($_SESSION['username']!='modo'){
    echo "vous n'avez pas accès à cette page";
} else {
    
?>

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/administration.css">
    <link rel="stylesheet" href="../CSS/surveillanceMachine.css">
    <title>Famisec</title>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" > 
    <script src="../JS/jquery-1.11.2.min.js"></script>
    <script src="../JS/index.js"></script>
 </head>
 <body>
    <h1> bonjour </h1>
 </body>
</html>

<?php } ?>