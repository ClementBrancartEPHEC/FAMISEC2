<?php
    include_once('../INC/machine.php');
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
    <link rel="stylesheet" href="../CSS/surveillanceMachine.css">
    <title>Famisec</title>
    <link rel="shortcut icon" href="../IMG/famiICONEpng.png" > 
    <script src="../JS/jquery-1.11.2.min.js"></script>
    <script src="../JS/index.js"></script>
 </head>
 <body>
     <header>

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
            <div class="wrapper">

                <!-- MACHINE UN -->

                <div id="machine">Machine Un<br>
                <div> ETAT: <?= $valor ?> </div>
                
                <?php
                   if(@$_GET['Empty']==true){
                ?>
                  <div> <?= $_GET['Empty'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK"></div> 
                    </form>  

                </div>       

                <!-- MACHINE DEUX -->

                <div id="machine2">Machine deux<br>
                <div> ETAT: <?= $valor2 ?> </div>

                <?php
                   if(@$_GET['Empty2']==true){
                ?>
                  <div> <?= $_GET['Empty2'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS2"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK2"></div> 
                    </form> 
                </div>

                <!-- MACHINE TROIS -->

                <div id="machine3">Machine trois<br>
                <div> ETAT: <?= $valor3 ?> </div>

                <?php
                   if(@$_GET['Empty3']==true){
                ?>
                  <div> <?= $_GET['Empty3'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS3"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK3"></div> 
                    </form> 
                </div>

                <!-- MACHINE QUATRE -->

                <div id="machine4">Machine quatre<br>
                <div> ETAT: <?= $valor4 ?> </div>

                <?php
                   if(@$_GET['Empty4']==true){
                ?>
                  <div> <?= $_GET['Empty4'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS4"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK4"></div> 
                    </form> 
                </div>

                <!-- MACHINE CINQ -->
                
                <div id="machine5">Machine cinq<br>
                <div> ETAT: <?= $valor5 ?> </div>

                <?php
                   if(@$_GET['Empty5']==true){
                ?>
                  <div> <?= $_GET['Empty5'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS5"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK5"></div> 
                    </form> 
                </div>

                <!-- MACHINE SIX -->

                <div id="machine6">Machine six<br>
                <div> ETAT: <?= $valor6 ?> </div>

                <?php
                   if(@$_GET['Empty6']==true){
                ?>
                  <div> <?= $_GET['Empty6'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS6"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK6"></div> 
                    </form> 
                </div>

                <!-- MACHINE 7 -->

                <div id="machine">Machine sept<br>
                <div> ETAT: <?= $valor7 ?> </div>

                <?php
                   if(@$_GET['Empty7']==true){
                ?>
                  <div> <?= $_GET['Empty7'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS7"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK7"></div> 
                    </form> 
                </div>

                <!-- MACHINE 8 -->

                <div id="machine">Machine huit<br>
                <div> ETAT: <?= $valor8 ?> </div>

                <?php
                   if(@$_GET['Empty8']==true){
                ?>
                  <div> <?= $_GET['Empty8'] ?> </div>
                <?php
                   }
                ?>

                    <form action="../INC/machine.php" method="post">
                        <div id="button_hs"><input type="submit" value=hors-service class="butHS" name="butHS8"></div>
                        <div id="button_ok"><input type="submit" value=en-service class="butOK" name="butOK8"></div> 
                    </form> 
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

<?php } ?>
