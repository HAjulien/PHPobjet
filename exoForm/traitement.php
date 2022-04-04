<?php

function my_var_dump($var){
    echo "<pre style='background-color: orange; border: 2px solid black'>";
    var_dump($var);
    echo "</pre>";
}


include_once("class/verifRIB.class.php");

// my_var_dump($_POST);

$RIB1= new RIBValidator( $_POST["bankCode"],$_POST["agencyCode"],$_POST["accountNumber"],$_POST["ribKey"]);
    // my_var_dump($RIB1);
    if ($RIB1->isValid()) {
        // on affiche aucun contenu avant header location donc aucun var_dump header location controleur ou traitement aveugle
        header("Location: index.php?notif=ok");
        exit;
    }else {
        header("Location: index.php?notif=nok");
        exit;
    };
    // $RIB1->afficherRIB();

