<?php 
    session_start();

    $_SESSION['prenom'] = 'Rashid';
    $_SESSION['nom'] = 'MALLAEV';
    $_SESSION['age'] = 32;

    // Cookies
    if(isset($_POST['submitE3'])){
        setcookie('login', $_POST['login'], time() + 30*24*3600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 30*24*3600, null, null, false, true);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="exo">
        <h1>Exercice 1</h1>
        <p>Faire une page HTML permettant de donner à l'utilisateur : son User Agent son adresse ip le nom du serveur</p>
        <?php
            echo 'User agent: ' . $_SERVER['HTTP_USER_AGENT'] . '<br/>';
            echo 'Adresse IP: ' . $_SERVER['REMOTE_ADDR'] . '<br/>';
            echo 'Nom de serveur: ' . $_SERVER['SERVER_NAME'] . '<br/>';
            echo 'Port: ' . $_SERVER['REMOTE_PORT'] . '<br/>';
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 2</h1>
        <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
        <a href="user.php">Lien</a><br>
        <?php
            echo 'Nom: ' . $_SESSION['nom'] . '<br/>';
            echo 'Prénom: ' . $_SESSION['prenom'] . '<br/>';
            echo 'Age: ' . $_SESSION['age'] . '<br/>';
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 3</h1>
        <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
        <form action="user.php" method="post">
            <p>Login</p>
            <input type="text" name="login">
            <p>Mot de pass</p>
            <input type="password" name="password" id=""><br/>
            <input type="submit" value="Valider" name="submitE3" >
        </form>
    </div>
    <div class="exo">
        <h1>Exercice 4</h1>
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        <?php
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 5</h1>
        <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
        <a href="user.php">Une page</a>
        <?php
        ?>
    </div>
</body>
</html>