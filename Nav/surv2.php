<?php
include_once('../INC/machine.php');
session_start();
?>



<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <META HTTP-EQUIV="Refresh" CONTENT="10; URL=https://www.famisec.be/Nav/surveillance.php"/>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/surveillance.css">
    <link rel="stylesheet" href="../css/surveillanceMachine.css">
    <title>Famisec</title>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" >
    <script src="../JS/jquery-1.11.2.min.js"></script>
    <script src="../JS/index.js"></script>
    <script type="text/javascript" src="../JS/surveillance.js"></script> 
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

     <?php
        if(isset($_SESSION['username'])){
                echo 'Bonjour: '.strip_tags($_SESSION['username']);?>
               <div class="container">
                <div class="wrapper"> 
                    <?php

                    //----------------------
                    // ON GERE LA MACHINE UN 
                    //----------------------

                    if ($valor=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Un <br>
                        <div id="hs1">Hors-Service</div>
                    <?php } 
                    if ($valor=='on'){?>
                        <div id="machineOn" style="background-color:green">Machine Un <br>
                        <div id="libre">libre</div>
                    <?php } ?>
                    
                    </div>

                    <?php 

                    //----------------------
                    // ON GERE LA MACHINE DEUX 
                    //----------------------

                    if ($valor2=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Deux <br>
                        <div id="hs1">Hors-Service</div>
                    <?php } 
                    if ($valor2=='on'){?>
                        <div id="machineOn" style="background-color:green">Machine Deux <br>
                        <div id="libre">libre</div>
                    <?php }
                    echo '
                    </div>
                    '?>
                    <?php

                    //----------------------
                    // ON GERE LA MACHINE TROIS 
                    //----------------------

                    if ($valor3=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Trois <br>
                        <div id="hs1">Hors-Service</div>
                    <?php } 
                    if ($valor3=='on'){?>
                        <div id="machineOn" style="background-color:green">Machine Trois <br>
                        <div id="libre">libre</div>
                    <?php }
                    echo '
                    </div>
                    '?>
                    <?php

                    //----------------------
                    // ON GERE LA MACHINE QUATRE 
                    //----------------------

                    if ($valor4=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Quatre <br>
                        <div id="hs1">Hors-Service</div>
                    <?php } 
                    if ($valor4=='on'){?>
                        <div id="machineOn" style="background-color:green">Machine Quatre <br>
                        <div id="libre">libre</div>
                    <?php }
                    echo '
                    </div>
                    '?>
                    <?php

                    //----------------------
                    // ON GERE LA MACHINE CINQ 
                    //----------------------

                    if ($valor5=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Cinq <br>
                        <div id="hs1">Hors-Service</div>
                    <?php } 
                    if ($valor5=='on'){?>
                        <div id="machineOn" style="background-color:green">Machine Cinq <br>
                        <div id="libre">libre</div>
                    <?php }
                    echo '
                    </div>
                    '?>
                    <?php

                    //----------------------
                    // ON GERE LA MACHINE SIX
                    //----------------------

                    if ($valor6='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Six <br>
                        <div id="hs1">Hors-Service</div>
                    <?php } 
                    if ($valor6=='on'){?>
                        <div id="machineOn" style="background-color:green">Machine Six <br>
                        <div id="libre">libre</div>
                    <?php } ?>
                    </div>
                </div>
            </div>

            <?php
        } else {
            echo '<h3> Connectez vous pour avoir accès à cette page </h3>';
        }
    ?> 
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
