<?php
require('connexion.php');

// 2

$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$email = trim($_POST['email']);
$mdp = trim($_POST['mdp']);

// 3

$sql = "INSERT INTO users (nom, prenom, email, mdp) VALUES ('$nom','$prenom','$email','$mdp')";
$requete = $connexion->query($sql);

// 4 Pour verifier qu'une variable n'est pas nul

if (!empty($nom) && !empty($prenom)) {
    // ENREGISTRER 
    $requete = $connexion->query($sql);
    header("Location: ../login.php");
} else {
    // VIDE RENVOYER AU FORMULAIRE
    header("Location: ../inscription.php");
}