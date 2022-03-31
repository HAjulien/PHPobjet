<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP objet</h1>

    <h2>Instanciation</h2>
    <?php 

        function my_var_dump($var){
            echo "<pre style='background-color: orange; border: 2px solid black'>";
            var_dump($var);
            echo "</pre>";
        }

        include_once("user.class.php"); 
        $user1 = new User("Dupont", "email@mail.com", "DUP");
        $user2 = new User("Durant", "email2@gmail.com", "DUR");
        $user3 = new User("duboit","email3@gmail.com","DUB");
        $user4 = new User("1234","email4@gmail.com","123");
        
        // $user1->pseudo = "dupond";   que public
        $user1->setPseudo("Dupond");
        $user1->setEmail("test@gmail.com");
        
        $user2->setPseudo("Durand"); //on passe setter car propriété private
        $user3->setPseudo("Dubois");
        $user4->setPseudo("1234567");

        if ($user1->envoyerEmail("Le titre", "le texte du mail")){
            echo "<p> mail envoyé </p>";
        }else{
            echo "<p> mail non envoyé <p>";
        };
        my_var_dump($user1);

        $user1->bloquer();

        my_var_dump($user1);
        my_var_dump($user2);
        my_var_dump($user3);
        my_var_dump($user4);


    ?>
    <h2>Héritages</h2>

    <?php
        include_once("admin.class.php"); 
        $admin1 = new Admin("Admin1","admin1@mail.com","ADMIN");
        my_var_dump($admin1);
        $admin1->supprimerUser($user2);
    ?>
</body>
</html>