<?php
require 'connexion.php';

if (isset($_POST['fullname']) && (isset($_POST['email']) && (isset($_POST['phone']) && (isset($_POST['message']))))) {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $request_insert_message = "INSERT INTO users (fullname, email, phone, message`) VALUES ('$fullname', '$email', '$phone', '$message')";
    $result_insert_message = $conn->query($request_insert_message);

    if ($result_insert_message) {
        header("Location: /portfolio/index.html?success");
    } else {
        header("Location: /portfolio/index.html?echec");
    }
}
