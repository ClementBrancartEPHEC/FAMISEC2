<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/accueil.css">
    <title>Famisec</title>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" >
    <script type="text/javascript" src="../JS/jquery-1.3.2.min.js"></script>
    <script src="../JS/diapo-jquery.js"></script>
    <script src="../JS/acceuil.js"></script>
    <script src="../JS/index.js"></script>
 </head>
 <body>
     <header>
      <!-- <img src=""> -->
      <div id="headpresentation">
          <a href="../Nav/accueil.php"><img src="../IMG/famiLogpng.png" width="80" height="80"></a>
      </div>
      <div id="headmenu">          
        <ul id="menu">
         <li id="hamburger"><button><img src="../IMG/hamburger.png" id="hamburger" classe="hambrgr" width="50" height="25"></button></li>
         <li><a href="../Nav/accueil.php">Accueil</a></li>
         <li><a href="../Nav/contact.php">Contact</a></li>
         <li><a href="../Nav/connexion.php">Connexion</a></li>
         <li><a href="../Nav/surveillance.php">Surveillance</a></li>
        </ul>
      </div>
      <div id="menuResponsive">
          <ul>
            <li><a href="../Nav/accueil.php" id="acceuilMenu">Accueil</a></li>
            <li><a href="../Nav/contact.php">Contact</a></li>
            <li><a href="../Nav/connexion.php">Connexion</a></li>
            <li><a href="../Nav/surveillance.php">Surveillance</a></li>
          </ul> 
      </div>
     </header>
     <main>
        <div class="container">
           <div id="diapo"> 

            <ul class="diaporama">
                <li><img src="../IMG/galerie/Famisec-Horaire.png" width="512" height="288" alt="Image 1" /></li>
                <li><img src="../IMG/galerie/famisec1.jpg" width="512" height="288" alt="Image 2" /></li>
                <li><img src="../IMG/galerie/famisec2.PNG" width="512" height="288" alt="Image 3" /></li>
            </ul> 

           </div> 
           <div id="description">
                <p>
                    <h4><i>À propos</i></h4>
                     Nettoyage à sec - Blanchisserie <br>
                     pour particulier et professionnel
                 </p>
                 <p>
                     <h4><i>Description de l’entreprise</i></h4>
                     Entreprise familiale fondée il y a plus de 30 ans
                 </p>
                 <p>
                     <h4><i>Produits</i></h4>
                     Nettoyage à sec de tous les textiles <br> 
                     Blanchisserie pour professionnels et particuliers <br>
                     Nettoyage de Tentures - Tapis - Cuir - Daim - Fourrures <br>
                     Couture <br>
                     Repassage sans titres services
                 </p>
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
 </body>
</html>
