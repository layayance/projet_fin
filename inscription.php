<?php
// demarre la session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile - Inscription</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once 'layouts/header.php'; ?>

            <form action="connexion_membre.php" method="post" class="w-25 mx-auto py-5">

                    <!-- Affiche un message d'erreur si existant -->
                
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                </div>  
                
                
                <div class="mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" name="confirm-password" id="confirm-password" class="form-control">
                </div>

                <div class="form-check">
                    <input type="checkbox" name="rgpd" id="rgpd" class="form-check-input">
                    <label class="form-check-label">J'accepte que PROFILE conserve mes données personnelles via ce formulaire. Aucune exploitation commerciale ne sera faites des données conservées.</label>
                </div>

                <button class="btn btn-primary mt-4">Valider mon inscription</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
        <?php require_once 'layouts/footer.php'; ?>
    </body>
</html>
 