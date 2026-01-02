<?php
require('connexion.php');

// 5

session_start();
 
$email = trim($_POST['email']);
$mdp = trim($_POST['mdp']);

// 6

$requete = "SELECT * FROM users where email = '$email' AND mdp ='$mdp'";
$resultat = $connexion->query($requete);

// 7

if ($resultat->num_rows > 0) {
    $users = $resultat->fetch_assoc();

    $_SESSION['id'] = $users['id'];

    header('Location: ../index.php');
} else {
    header("Location: ../login.php?error=1");
}