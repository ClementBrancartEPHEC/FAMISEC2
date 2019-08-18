<?php
include_once('../INC/machine.php');
include_once('../INC/etatMachine.php');
session_start();
?>



<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <META HTTP-EQUIV="Refresh" CONTENT="10; URL=https://www.famisec.be/Nav/surveillance.php"/> 
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/surveillance.css">
    <link rel="stylesheet" href="../CSS/surveillanceUser.css">
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
                echo 'Bonjour: '.strip_tags($_SESSION['username']); ?>
               <div class="container">
                <div class="wrapper"> 
                    <?php

                    //----------------------
                    // ON GERE LA MACHINE UN 
                    //----------------------

                    if ($valor=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Un <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor=='on'){ 
                        if ($porte1 == 'fermee'){
                            if($fonction1 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Un <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction1 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Un <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte1 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Un <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }

                    //----------------------
                    // ON GERE LA MACHINE DEUX 
                    //----------------------

                    if ($valor2=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Un <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor2=='on'){ 
                        if ($porte2 == 'fermee'){
                            if($fonction2 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Deux <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction2 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Deux <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte2 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Deux <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }

                    //----------------------
                    // ON GERE LA MACHINE TROIS 
                    //----------------------

                    if ($valor3=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Trois <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor3=='on'){ 
                        if ($porte3 == 'fermee'){
                            if($fonction3 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Trois <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction3 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Trois <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte3 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Trois <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }


                    //----------------------
                    // ON GERE LA MACHINE QUATRE 
                    //----------------------

                    if ($valor4=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Quatre <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor4=='on'){ 
                        if ($porte4 == 'fermee'){
                            if($fonction4 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Quatre <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction4 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Quatre <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte4 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Quatre <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }

                    //----------------------
                    // ON GERE LA MACHINE CINQ 
                    //----------------------

                    if ($valor5=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Cinq <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor5=='on'){ 
                        if ($porte5 == 'fermee'){
                            if($fonction5 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Cinq <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction5 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine TCinq <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte5 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Cinq <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }

                    //----------------------
                    // ON GERE LA MACHINE SIX 
                    //----------------------

                    if ($valor6=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Six <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor6=='on'){ 
                        if ($porte6 == 'fermee'){
                            if($fonction6 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Six <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction6 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Six <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte6 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Six <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }
                    
                    //----------------------
                    // ON GERE LA MACHINE SEPT 
                    //----------------------

                    if ($valor7=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Trois <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor7=='on'){ 
                        if ($porte7 == 'fermee'){
                            if($fonction7 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Sept <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction7 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Sept <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte7 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Sept <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    }

                    //----------------------
                    // ON GERE LA MACHINE HUIT 
                    //----------------------

                    if ($valor8=='off'){ ?>
                        <div id="machineOff" style="background-color:lightcoral">Machine Trois <br>
                        <div id="hs1">Hors-Service</div> </div>
                    <?php } 
                    if ($valor8=='on'){ 
                        if ($porte8 == 'fermee'){
                            if($fonction8 == 'enCours'){
                                echo '<div id="machineOn" style="background-color:blue">Machine Huit <br>';
                                echo '<div id="libre">en cours </div></div>';    
                            } 
                            if($fonction8 == 'libre'){
                                echo '<div id="machineOn" style="background-color:yellow">Machine Huit <br>';
                                echo '<div id="libre"> occupée </div></div>';
                            } 
                        } 
                        if ($porte8 == 'ouverte'){
                            echo '<div id="machineOn" style="background-color:green">Machine Huit <br>';
                            echo '<div id="libre">libre </div></div>';
                        }
                    } ?>
                    
                </div>
            </div>

            <?php
        } else {
            echo ' <h3> &nbsp; Connectez vous pour avoir accès à cette page </h3>';
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
