<?php

/*
 * Ajout d'un nouveau membre en BDD
 */

// Démarrer la session
session_start();

// Namespace
use PHPMailer\PHPMailer\PHPMailer;

// Connexion à la BDD
require_once 'include/connexion.php';

//header('Location: admin/header.php');

// Vérification des champs du formulaire
// On vérifie que tous les champs existe et ne sont pas vides
 if (isset($_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['mdp'], $_POST['confirm-password'])
    && !empty($_POST['prenom'])
    && !empty($_POST['nom'])
    && !empty($_POST['email'])
    && !empty($_POST['mdp'])
    && !empty($_POST['confirm-password']))
    
    
 {
     
    //var_dump($_POST);
    // Nettoyage des données reçues
    // Grâce à array_map(), nous utilisons la fonction strip_tags() sur toutes les valeurs de notre superglobales $_POST
    $_POST = array_map('strip_tags', $_POST);

    // Vérifie que l'adresse email est unique
    $verifEmail = $db->prepare('SELECT id FROM users WHERE email = :email');
    $verifEmail->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $verifEmail->execute();

    // Vérifie que l'adresse email est correct
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Votre adresse email est invalide';
        header('Location: inscription.php');
    }
  
    

    // Si la requête nous retourne un résultat, on retourne une erreur
    if ($verifEmail->fetch() !== false) {
        $tr = "test";

    } elseif ($verifEmail->rowCount() === 1) {
        $_SESSION['error'] = 'Votre adresse email est déjà utilisée';
        header('Location: inscription.php');
    }

    
    // Vérifie que le mot de passe contienne 6 caractères minimum
    elseif (iconv_strlen($_POST['mdp']) < 6) {
        $_SESSION['error'] = 'Votre mot de passe doit contenir 6 caractères minimum';
        header('Location: inscription.php');
    }

    // // Vérifie que les mots de passes correspondent
    elseif ($_POST['mdp'] !== $_POST['confirm-password']) {
        $_SESSION['error'] = 'Vos mots de passe ne sont pas identiques';
        header('Location: inscription.php');
    }

    else {
        // Si on est ici, c'est que aucunes erreurs ci-dessus n'a été générées
        // Insérer les données en BDD
        $query = $db->prepare('INSERT INTO users (prenom, nom, email, mdp, role) VALUES (:prenom, :nom, :email, :mdp, :role)');
        $query->bindValue(':prenom', $_POST['nom'], PDO::PARAM_STR);
        $query->bindValue(':nom', $_POST['prenom'], PDO::PARAM_STR);
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        // Chiffrement du mot de passe
        $query->bindValue(':mdp', password_hash($_POST['mdp'], PASSWORD_ARGON2I), PDO::PARAM_STR);
        $query->bindValue(':role', 1, PDO::PARAM_INT);
       
        
        if ($query->execute()) {

            header('Location: index.php');
            exit();

            // On instancie PHPMailer
            $mailer = new PHPMailer;

            // try { ... } catch() { ... }
            
            $_SESSION['success'] = 'Merci et bienvenue !';
            header('Location: index.php');
        } else{
             $_SESSION['error'] = 'Un problème est survenue lors de l\'enregistrement';
             header('Location: inscription.php');
        }
    }
} else {
    echo 'aucun aucun';
    var_dump($_POST);
}