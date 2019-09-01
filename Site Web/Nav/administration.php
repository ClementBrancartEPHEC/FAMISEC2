<?php
    session_start();

    if($_SESSION['username']!='admin'){
        echo "<h1>Vous n'avez pas les droits</h1><br><li><a href='../Nav/accueil.php' id='SiteWeb'>Site de FAMISEC</a></li>";
    } else {
?>    

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/administration.css">
    <title>Famisec</title>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" > 
    <script src="../JS/jquery-1.11.2.min.js"></script>
    <script src="../JS/index.js"></script>
    <script src="../JS/surveillance.js"></script>
 </head>
 <body>
     <header>
      <!-- <img src=""> -->
      <div id="headpresentation">
        <a href="accueil.php"><img src="../IMG/famiLogpng.png" width="80" height="80"></a>
      </div>
      <div id="headmenu">
        <h1>ADMINISTRATION</h1>
      </div>
      <div id="menuResponsive">
        <h1> ADMINISTRATION </h1> 
     </div>
     </header>
     <main>
        <div class="container">
            <?php

            if(isset($_SESSION['username'])){
                if($_SESSION['username']==='admin'){
                    echo "<br> O grand maitre <br>";
                    echo "<hr>";
                }
            }
            ?>

        </div>
        <ul id="buttonAdmin">
            <br>
            <li><a href="accueil.php" id="SiteWeb">Site web</a></li>
            <li><a href="surveillanceMachine.php" id="gererMachine">Gérer les machines</a></li>
        </ul>    
            <br><hr>
            <li><a href="../INC/logout.php?logout" id="deconnect">Se déconnecter</a></li>
      </main>
      <footer>
        <div class="container">
         <div>
          <div>
              <ul id="listfooter">
                  <li>Numéro de fixe : 081/30.44.61</li>
                  <li>GSM :  0477/93.39.46</li>
                  <li>Adresse : Avenue bourgmestre Jean Materne, 38 - 5100 Jambes </li>
                  <li>Mail : gregory.calbert@gmail.com</li>
              </ul>
          </div>
         </div>
        </div>
      </footer>
 </body>
</html>

<?php } ?>
