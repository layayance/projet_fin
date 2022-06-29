<?php
// demarre la session
session_start();

// creation de la session 
// $_SESSION['user'] = [
//     'id' => $user['id'],
//     'role' => $user['role'],
//     'prenom' => $user['prenom'],
//     'nom' => $user['nom'],
//     'email' => $user['email']
//     'mpd' => $user['mdp']
// ];

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        <?php
        // header
        require_once 'layouts/header.php'
        ?>

        <?php
        // footer
        require_once 'layouts/footer.php'
        ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>