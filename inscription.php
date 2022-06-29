<?php
// demarre la session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style-begin-login.css">
    <title>Fidelis ~ identification</title>
</head>

<body>
    <header class="Base container">
        <a href="/html/market.html" style="text-decoration:none ;">
            <i class="ri-body-scan-line" id="theme-button"></i>
        </a>
    </header>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <!-- <img src="/assets/img/2.png" alt=""> -->
            </div>

            <div class="login__forms">

                <form action="" class="login__registre" id="login-in">
                    <h1 class="login__title">S'identifier</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Nom d'utilisateur" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Mot de passe" class="login__input">
                    </div>

                    <a href="#" class="login__forgot">Mot de passe oublié ?</a>

                    <a href="#" class="login__button">S'identifier</a>

                    <div>
                        <span class="login__account">Vous n'avez pas de compte ?</span>
                        <span class="login__signin" id="sign-up">S'inscrire</span>
                    </div>
                </form>

                <form action="" class="login__create none" id="login-up">
                    <h1 class="login__title">Créer un compte</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Nom d'utilisateur" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" placeholder="Email" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Mot de passe" class="login__input">
                    </div>

                    <a href="#" class="login__button">S'inscrire</a>

                    <div>
                        <span class="login__account">Vous avez déjà un compte ?</span>
                        <span class="login__signup" id="sign-in">S'identifier</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--=============== FOOTER ===============-->
    <footer class="footer container">
        <span class="footer__copy">
                &#169; Fidelis. Tous droits reservés
            </span>
    </footer>

    <!--===== JS =====-->
    <script src="/js/main.js"></script>
</body>

</html>