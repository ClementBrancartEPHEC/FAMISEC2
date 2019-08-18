<?php
session_start();
include_once ('../INC/CheckRobots.php');
?>

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/formContact.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" >

    <title>Famisec</title> 

 </head>
 <body>
     <header>
      <!-- <img src=""> -->
      <div id="headpresentation">
        <a href="accueil.php"><img src="../IMG/famiLogpng.png" width="80" height="80"></a>
      </div>
      <div id="headmenu">
        <ul id="menu">
         <li id="hamburger"><button><img src="../IMG/hamburger.png" id="hamburger" classe="hambrgr" width="50" height="25"></button></li>    
         <li><a href="accueil.php">Accueil</a></li>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="connexion.php">Connexion</a></li>
         <li><a href="surveillance.php">Surveillance</a></li>
        </ul>
      </div>
      <div id="menuResponsive">
        <ul>
            <li><a href="accueil.php" id="acceuilMenu">Accueil</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="connexion.php">Connexion</a></li>
            <li><a href="surveillance.php">Surveillance</a></li>
        </ul> 
     </div>
     </header>
     <main>
        <div class="container">
            <div id="formContact"> 
              <form action="../INC/contactMe.php" method="post" class="login-block"> 
                    <h1>CONTACTEZ-NOUS</h1>

                    <?php
                       if(@$_GET['Empty']==true){
                    ?>
                      <div> <?= $_GET['Empty'] ?> </div>
                    <?php
                       } 
                    ?>

                    <?php
                       if(@$_GET['Envois']==true){
                    ?>
                      <div> <?= $_GET['Envois'] ?> </div>
                    <?php
                       } 
                    ?>

                    <input type="email" value="" placeholder="Votre mail" id="mail" name="mail"/>
                    <input type="text" value="" placeholder="Votre sujet" id="sujet" name="sujet"/>
                    <textarea rows="4" cols="42" placeholder="Votre message" id="message" name="message"></textarea>
                    <i><b> I'm not a Robot ! </b></i> 
                    <input type="checkbox" name="<?php echo $_SESSION['confirmation'];?>"><i></i> 
                    <!-- <input type="text" value="" placeholder="Votre message" id="password" /> -->
                    <button name="Envoi">ENVOYER</button>  
              </form>  
            </div>
            <div id="mapid">
                
            </div>
        </div>
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

    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
    <script src="../JS/jquery-1.11.2.min.js"></script>
    <script src="../JS/index.js"></script>
    <script src="../JS/map.js"></script>

 </body>
</html>
