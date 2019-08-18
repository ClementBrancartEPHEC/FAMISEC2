<?php
/* la function php qui va créer un string de 31 lettres */
function code($nb_car, $chaine = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'){
    $nb_lettres = strlen($chaine) - 1;
    $generation = '';

    for($i=0; $i < $nb_car; $i++){
        $pos = mt_rand(0, $nb_lettres);
        $car = $chaine[$pos];
        $generation .= $car;
    }
    
    return $generation;
}

/* on stock le string dans une $_session */
$_SESSION['confirmation'] = code(31);
?>