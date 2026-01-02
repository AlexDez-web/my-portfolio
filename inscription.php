<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="./STYLES/styles.css">
</head>

<body>
    <form method="post" action="SERVER/enregister.php">
        <h1>
            S'inscrire
        </h1>
        <div class="inputs">
            <input type="text" name="nom" id="" placeholder="Entrez votre nom">
            <input type="text" name="prenom" id="" placeholder="Entrez votre prenom">
            <input type="email" name="email" id="" placeholder="Entrez votre e-mail">
            <input type="password" name="mdp" placeholder="Entrez votre mot de passe">
            <input type="password" name="mdp" placeholder="Confirmez votre mot de passe">
        </div>

        <div>
            <a class="inscription" href="login.php"> J'ai déjà un <span>compte</span>. Je veux me
                <span>connecter</span></a>
        </div>

        <button>S'inscrire</button>
    </form>
</body>

</html>