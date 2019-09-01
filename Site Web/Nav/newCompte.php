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
            <form action="../INC/ajout.php" method="post" class="login-block">
                <h1>CREEZ VOTRE COMPTE</h1>

                <?php
                   if(@$_GET['Empty']==true){
                ?>
                  <div> <?= $_GET['Empty'] ?> </div>
                <?php
                   }
                ?>

                <input type="text" value="" placeholder="Nom d'utilisateur" id="username" name="newUser"/>
                <input type="password" value="" placeholder="Mot de passe" id="password" name="newPassword"/>
                <input type="email" value="" placeholder="Adresse mail" id="mail" name="newMail"/>
                <i><b> Confirmation de la création: </b></i>
                <input type="checkbox" name="checkNew">
                <button name="Save">S'enregistrer</button>
                <br>
                <br>
                <a href="infosData.php" id="utiliserData">utilisation de mes données</a>  
            </form>
          </div> 
          <div id="contenu">
            <p>
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
