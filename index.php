<?php

// 8

require("SERVER/connexion.php");

session_start();

// 9

if (isset($_SESSION["id"])) {
    $id_connected = intval($_SESSION["id"]);
} else {
    $id_connected = 0;
}

// 10

$req_verif_user = "SELECT * FROM users WHERE id = '$id_connected'";
$resultat = $connexion->query($req_verif_user);

// 11

if ($resultat->num_rows > 0) {
    $user = $resultat->fetch_assoc();
} else {
    $user = [];
}

// 12

// $nom = $user['nom'];
//  $prenom = $user['prenom'];

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./STYLES/styles.css">
</head>
 
<body>
    <div>
        <header>
            <div class="logo">
                LOGO
            </div>

            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <?php
                        if (!empty($user)) {
                            ?>
                                <li><a href="SERVER/logout.php">Se déconnecter</a></li>
                            <?php
                        } else {
                            ?>
                                <li><a href="login.php">Se connecter</a></li>
                                <li><a href="inscription.php">S'enregistrer</a></li>
                            <?php
                        }
                    ?>
                </ul>
            </nav>

        </header>

        <div class="container">
            <div>
                <h2>PAGE ACCUEIL</h2>

                <p>
                    <span>Bienvenue <strong>INCONNUE</strong></span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>