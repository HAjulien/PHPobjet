<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rib</title>
</head>
<body>
    <h1>vérification rib</h1>

    <?php

    function my_var_dump($var){
        echo "<pre style='background-color: orange; border: 2px solid black'>";
        var_dump($var);
        echo "</pre>";
    }

    include_once("verification.class.php");

    $RIB1= new RIBValidator("30024","21543","196thu895a","38");
    my_var_dump($RIB1);
    if ($RIB1->isValid()) {
        echo "<p> Ce rib est valide </p>";
    }else {
        echo "<p> Ce rib est invalide </p>";
    };
    $RIB1->afficherRIB();

    ?>
</body>
</html>