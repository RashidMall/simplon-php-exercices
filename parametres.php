<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres</title>
</head>
<body>
    <div class="exo">
        <h1>Exercice 1</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean</p>
        <?php 
            $nom = 'Nemare';
            $prenom = 'Jean';
            echo "<a href=\"parametres.php?nom=$nom&amp;prenom=$prenom\">Hey Hey!</a>";
            if(isset($_GET['nom']) && isset($_GET['prenom'])){
                echo '<br />' . $_GET['nom'] . ' ' . $_GET['prenom'];
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 2</h1>
        <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean</p>
        <?php
            $age = 50;
            echo "<a href=\"parametres.php?age=$age\">Age</a>";
            if(isset($_GET['age'])){
                echo '<br />L\'age: ' . $_GET['age'];
            }else{
                echo '<br /> Pas d\'age!';
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 3</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>
        <?php 
            $debut = '2/05/2016';
            $fin = '27/11/2016';
            echo "<a href=\"parametres.php?dateDebut=$debut&amp;dateFin=$fin\">Dates</a>";
            if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
                echo '<br />Date debut: ' . $_GET['dateDebut'];
                echo '<br />Date fin: ' . $_GET['dateFin'];
            }else{
                // No comment
                echo '<br /> Rien';
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 4</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP</p>
        <?php
            $langage = 'PHP';
            $serveur = 'LAMP';
            echo "<a href=\"parametres.php?langage=$langage&amp;serveur=$serveur\">Click</a>";
            if(isset($_GET['langage']) && isset($_GET['serveur'])){
                echo '<br />Langage: ' . $_GET['langage'];
                echo '<br />Serveur: ' . $_GET['serveur'];
            }else{
                echo '<br /> Rien';
            } 
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 5</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12</p>
        <?php 
            $semaine = 12;
            echo "<a href=\"parametres.php?semaine=$semaine\">semaine</a>";
            if(isset($_GET['semaine'])){
                echo '<br />Semaine: ' . $_GET['semaine'];
            }else{
                echo '<br /> Pas d\'semaine!';
            }  
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 6</h1>
        <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101</p>
        <?php
            $batiment = 12;
            $salle = 101;
            echo "<a href=\"parametres.php?batiment=$batiment&amp;salle=$salle\">Dates</a>";
            if(isset($_GET['batiment']) && isset($_GET['salle'])){
                echo '<br />Batiment: ' . $_GET['batiment'];
                echo '<br />Salle: ' . $_GET['salle'];
            }else{
                echo '<br /> Rien';
            }  
        ?>
    </div>
</body>
</html>