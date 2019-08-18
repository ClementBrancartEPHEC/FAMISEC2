<?php
require_once('connect.php');
@$mysqli = new mysqli($servername, $username, $password, $db);


        //----------------------------------------
        // ON GERE LES BOUTONS DES MACHINES ET LES ETATS
        //----------------------------------------

            //----------------------------------MACHINE UN---------------------------------------------

            if(isset($_POST['butHS'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineUne'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty= l'etat passe à OFF ");

            }
            if(isset($_POST['butOK'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineUne'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty= l'etat passe à ON ");
            }


            //-----------------------------------MACHINE DEUX--------------------------------------------

            if(isset($_POST['butHS2'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineDeux'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty2= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK2'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineDeux'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty2= l'etat passe à ON ");
            }

            //-------------------------------MACHINE TROIS------------------------------------------------

            if(isset($_POST['butHS3'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineTrois'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty3= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK3'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineTrois'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty3= l'etat passe à ON ");
            }
            
            //--------------------------------MACHINE QUATRE-----------------------------------------------

            if(isset($_POST['butHS4'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineQuatre'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty4= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK4'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineQuatre'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty4= l'etat passe à ON ");
            }


            //-------------------------------MACHINE CINQ------------------------------------------------

            if(isset($_POST['butHS5'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineCinq'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty5= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK5'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineCinq'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty5= l'etat passe à ON ");
            }

            //--------------------------------MACHINE SIX-----------------------------------------------

            if(isset($_POST['butHS6'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineSix'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty6= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK6'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineSix'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty6= l'etat passe à ON ");
            }

            //--------------------------------MACHINE SEPT-----------------------------------------------

            if(isset($_POST['butHS7'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineSept'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty7= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK7'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineSept'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty7= l'etat passe à ON ");
            }

            //--------------------------------MACHINE HUIT-----------------------------------------------

            if(isset($_POST['butHS8'])) {
                $query="update etatmachine SET etat = 'off' WHERE nom='machineHuit'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty8= l'etat passe à OFF ");
            }
            if(isset($_POST['butOK8'])) {
                $query="update etatmachine SET etat = 'on' WHERE nom='machineHuit'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
    
                header("location:../Nav/surveillanceMachine.php?Empty8= l'etat passe à ON ");
            }

        //----------------------------------------
        // ON CONVERTIT LES ETATS DES MACHINES
        //----------------------------------------

            //---------------------------------MACHINE UN----------------------------------------------


                $query = "SELECT etat from etatmachine WHERE nom='machineUne'";
                if (!$result = $mysqli->query($query)) {
                    // Oh non ! La requête a échoué. 
                    echo "Désolé, le site web subit des problèmes.";
                    exit;
                }
                $result = mysqli_query($connect, $query);
   
                $preValor = mysqli_fetch_assoc($result);
                $valor = implode(',',$preValor); //on repasse le tableau en mode string


            //---------------------------------MACHINE DEUX----------------------------------------------

            $query2 = "SELECT etat from etatmachine WHERE nom='machineDeux'";
            if (!$result2 = $mysqli->query($query2)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
            }
            $result2 = mysqli_query($connect, $query2);

            $preValor2 = mysqli_fetch_assoc($result2);
            $valor2 = implode(',',$preValor2); //on repasse le tableau en mode string

            //----------------------------------MACHINE TROIS---------------------------------------------

            $query3 = "SELECT etat from etatmachine WHERE nom='machineTrois'";
            if (!$result3 = $mysqli->query($query3)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
            }
            $result3 = mysqli_query($connect, $query3);

            $preValor3 = mysqli_fetch_assoc($result3);
            $valor3 = implode(',',$preValor3); //on repasse le tableau en mode string
            
            //----------------------------------MACHINE QUATRE---------------------------------------------

            $query4 = "SELECT etat from etatmachine WHERE nom='machineQuatre'";
            if (!$result4 = $mysqli->query($query4)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
            }
            $result4 = mysqli_query($connect, $query4);

            $preValor4 = mysqli_fetch_assoc($result4);
            $valor4 = implode(',',$preValor4); //on repasse le tableau en mode string
        
            //------------------------------------MACHINE CINQ-------------------------------------------

            $query5 = "SELECT etat from etatmachine WHERE nom='machineCinq'";
            if (!$result5 = $mysqli->query($query5)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
            }
            $result5 = mysqli_query($connect, $query5);

            $preValor5 = mysqli_fetch_assoc($result5);
            $valor5 = implode(',',$preValor5); //on repasse le tableau en mode string

            //------------------------------------MACHINE SIX-------------------------------------------

            $query6 = "SELECT etat from etatmachine WHERE nom='machineSix'";
            if (!$result6 = $mysqli->query($query6)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
            }
            $result6 = mysqli_query($connect, $query6);

            $preValor6 = mysqli_fetch_assoc($result6);
            $valor6 = implode(',',$preValor6); //on repasse le tableau en mode string

            //------------------------------------MACHINE SIX-------------------------------------------

            $query7 = "SELECT etat from etatmachine WHERE nom='machineSept'";
            if (!$result7 = $mysqli->query($query7)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
                }
            $result7 = mysqli_query($connect, $query7);
            
            $preValor7 = mysqli_fetch_assoc($result7);
            $valor7 = implode(',',$preValor7); //on repasse le tableau en mode string

            //------------------------------------MACHINE SIX-------------------------------------------

            $query8 = "SELECT etat from etatmachine WHERE nom='machineHuit'";
            if (!$result8 = $mysqli->query($query8)) {
                // Oh non ! La requête a échoué. 
                echo "Désolé, le site web subit des problèmes.";
                exit;
                }
            $result8 = mysqli_query($connect, $query8);
                        
            $preValor8 = mysqli_fetch_assoc($result8);
            $valor8 = implode(',',$preValor8); //on repasse le tableau en mode string

$mysqli->close();
?>        