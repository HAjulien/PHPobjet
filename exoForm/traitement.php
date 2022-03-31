<?php

function my_var_dump($var){
    echo "<pre style='background-color: orange; border: 2px solid black'>";
    var_dump($var);
    echo "</pre>";
}

include_once("class/verifRIB.class.php");


$RIB1= new RIBValidator( $_POST["bankCode"],$_POST["agencyCode"],$_POST["accountNumber"],$_POST["ribKey"]);
    my_var_dump($RIB1);
    if ($RIB1->isValid()) {
        header("Location: index.php?success");
    }else {
        header("Location: index.php?erreur");
    };
    // $RIB1->afficherRIB();

