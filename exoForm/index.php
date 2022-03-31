<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>

    <?php if (isset($_GET["erreur"])) { 
            echo "Désolé votre rib est faux!"; 
    } ?>
    <?php if (isset($_GET["success"])) { 
            echo "le formulaire a été enregistré!"; 
    } ?>

    <h1> Formulaire de contact </h1>

    <form id="contactForm" action="traitement.php" method="post">

        <div>
            <label for="bankCode"> Code de la banque </label>
            <input type="text" id="bankCode" name="bankCode" placeholder="12345" pattern="[0-9]{5}" required>
        </div>
        <div>
            <label for="agencyCode"> Code guichet </label>
            <input type="text" id="agencyCode" name="agencyCode" placeholder="12345" pattern="[0-9]{5}" required>
        </div>
        <div>
            <label for="accountNumber"> numéro de compte </label>
            <input type="text" id="accountNumber" name="accountNumber" placeholder="12345abcde" pattern="[0-9A-Za-z]{10}" required>
        </div>
        <div>
            <label for="ribKey"> clé du rib </label>
            <input type="text" id="ribKey" name="ribKey" placeholder="70" pattern="[0-9]{2}" required>

            <button type="submit">Envoyer</button>

    </form>

</body>
</html>