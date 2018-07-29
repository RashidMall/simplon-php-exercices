<?php 
    session_start();
    // Cookies
    if(isset($_POST['submitE3'])){
        setcookie('login', $_POST['login'], time() + 30*24*3600, null, null, false, true);
        setcookie('password', $_POST['password'], time() + 30*24*3600, null, null, false, true);
        header("Location:user.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <div class="exo">
        <?php 
            if(isset($_GET['nom']) AND isset($_GET['prenom'])){
                echo '<h1>Exercice 3</h1>';
                echo 'Hey Hey! ' . htmlspecialchars($_GET['nom']) . ' ' . htmlspecialchars($_GET['prenom']); 
            }
        ?>
    </div>
    <div class="exo">
        <?php 
            if(isset($_POST['nom']) AND isset($_POST['prenom'])){
                echo '<h1>Exercice 4</h1>';
                echo 'Hey Hey! ' . $_POST['nom'] . ' ' . $_POST['prenom']; 
            }
        ?>
    </div>
    <div class="exo">
        <?php 
            if(isset($_SESSION['nom']) AND isset($_SESSION['prenom']) AND isset($_SESSION['age'])){
                echo 'Nom: ' . $_SESSION['nom'] . '<br/>';
                echo 'Prénom: ' . $_SESSION['prenom'] . '<br/>';
                echo 'Age: ' . $_SESSION['age'] . '<br/>';
            }
        ?>
    </div>
    <div class="exo">
        <?php 
            if(isset($_COOKIE['login']) AND isset($_COOKIE['password'])){
                echo $_COOKIE['login'] . ' ' . $_COOKIE['password'];
            }
        ?>
    </div>
    <div class="exo">
            <h1>Modifier les cookies</h1>
        <form action="user.php" method="post">
            <p>Login</p>
            <input type="text" name="login">
            <p>Mot de pass</p>
            <input type="password" name="password" id=""><br/>
            <input type="submit" value="Modifier" name="submitE3" >
        </form>
    </div>
</body>
</html>