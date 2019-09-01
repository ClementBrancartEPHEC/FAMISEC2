<?php
include_once('../INC/process.php')
?>

<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/connexion.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Famisec</title>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" >  
    <script src="../JS/jquery-1.11.2.min.js"></script>
    <script src="../JS/index.js"></script>
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
          <div id="formLogin">  
            <form action="../INC/forgot.php" method="post" class="login-block">
                <h1>RECUPERER MES INFOS UTILISATEUR</h1>

                <?php
                   if(@$_GET['Empty']==true){
                ?>
                  <div> <?= $_GET['Empty'] ?> </div>
                <?php
                   }
                ?>

                <input type="email" value="" placeholder="Votre adresse mail liée au compte" id="mail" name="mail2"/>
                <button name="Recup">Recuperer username</button> 
                <br>
                <br>
                <a href="infosData.php" id="utiliserData" style="float: right">utilisation de mes données</a> 
            </form>
            <br>
            <br>
            <form action="../INC/changeMdp.php" method="post" class="login-block">
                <h1>CHANGEMENT MOT DE PASSE</h1>

                <?php
                   if(@$_GET['Empty2']==true){
                ?>
                  <div> <?= $_GET['Empty2'] ?> </div>
                <?php
                   }
                ?>
                <input type="text" value="" placeholder="Nom d'utilisateur" id="username" name="username"/>
                <input type="email" value="" placeholder="Votre adresse mail liée au compte" id="mail" name="mail"/>
                <input type="password" value="" placeholder="Nouveau mot de passe" id="password" name="newPassword"/>
                <i><b> Confirmation du changement: </b></i>
                <input type="checkbox" name="checkMdp">
                <button name="change">Changer mot de passe</button>
                <br>
                <br>
                <a href="newCompte.php" id="newCompte" style="float: right">créer un compte</a>  
            </form>
          </div> 
          <div id="contenu">
            <p id="seConnecter">
                <h4><i>Pourquoi se connecter?</i></h4>
                Connectez-vous afin de bénéficier <br>
                de notre technologie destinée <br>
                à la surveillance à distance de nos machines.
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
