<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_GET["notif"])) {
                switch ($_GET["notif"]) {
                    case "ok": ?>

                        <div class="alert alert-success" role="alert">
                            RIB valide !
                        </div>

                        <?php
                        break;

                    case "nok": ?>

                        <div class="alert alert-danger" role="alert">
                            RIB non valide !
                        </div>

                        <?php
                        break;

                    default: ?>

                        <div class="alert alert-warning" role="alert">
                            Paramètre étrange !
                        </div>

                    <?php
                }
            }                    
        ?>

    <h1> Formulaire de contact </h1>

    <form id="contactForm" action="traitement.php" method="post">

        <div>
            <label for="bankCode"> Code de la banque </label>
            <input type="text" id="bankCode" name="bankCode" placeholder="12345" pattern="[0-9]{5}" maxlength="5"  required>
        </div>
        <div>
            <label for="agencyCode"> Code guichet </label>
            <input type="text" id="agencyCode" name="agencyCode" placeholder="12345" pattern="[0-9]{5}" maxlength="5" required>
        </div>
        <div>
            <label for="accountNumber"> numéro de compte </label>
            <input type="text" id="accountNumber" name="accountNumber" placeholder="12345abcdef" pattern="[0-9A-Za-z]{11}" maxlength="11" required>
        </div>
        <div>
            <label for="ribKey"> clé du rib </label>
            <input type="text" id="ribKey" name="ribKey" placeholder="70" pattern="[0-9]{2}" maxlength="2" required>

            <button type="submit">Envoyer</button>

    </form>

</body>
</html>