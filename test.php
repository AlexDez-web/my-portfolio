<?php

$user = [
    "id" => 1,
    "nom" => "Ahoty",
    "sexe" => "M",
    "prenom" => "Boris Lukrece",
    "email" => "boris@gmail.com",
    "mdp" => "1234Azerty",
];

$id =$user['id'];
$nom =$user['nom'];
$prenom =$user['prenom'];
$sexe =$user['sexe'];
$email =$user['email'];
$mdp =$user['mdp'];

//  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<h1>MON PROFIL</h1>
<div>
    <h3>
        <?php
            if ($id == 1) {
                ?>
                    <a href='#'>Se connecter</a>
                    <a href='#'>S'inscrire</a>
                <?php
            }else{
                ?>
                    <a href='#'>Se connecter</a>
                    <a href='#'>S'inscrire</a>
                <?php
            }
        ?>
    </h3>
</div>
    
<div>
    Bienvenue 
    <strong>
    <?php
        echo " $nom $prenom ";
    ?>
    </strong>
</div>

<div>
    Sexe
    <strong>
    <?php
        echo $sexe;
    ?>
    </strong>
</div>

<div>
    Email
    <strong>
    <?php
        echo $email;
    ?>
    </strong>
</div>

<div>
    Mot de passe
    <strong>
    <?php
        echo $mdp;
    ?>
    </strong>
</div>
</body>
</html>