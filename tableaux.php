<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="exo">
        <h1>Exercice 1</h1>
        <p>Créer un tableau mois et l'initialiser avec les valeurs suivantes : janvier février mars avril mai juin juillet aout septembre octobre novembre décembre.</p>
        <?php 
            $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            print_r($mois);
        ?>
</div>
<div class="exo">
        <h1>Exercice 2</h1>
        <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>
        <?php 
            echo $mois[2];
        ?>
</div>
<div class="exo">
        <h1>Exercice 3</h1>
        <p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
        <?php 
            echo $mois[5];
        ?>
</div>
<div class="exo">
        <h1>Exercice 4</h1>
        <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
        <?php 
            $mois[7] = 'août';
            echo $mois[7];            
        ?>
</div>
<div class="exo">
        <h1>Exercice 5</h1>
        <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
        <?php 
            $dep_assoc = array( 2 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-calais', 80 => 'Somme');
            print_r($dep_assoc);
        ?>
</div>
<div class="exo">
        <h1>Exercice 6</h1>
        <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
        <?php 
            echo $dep_assoc[59];
        ?>
</div>
<div class="exo">
        <h1>Exercice 7</h1>
        <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
        <?php 
            $dep_assoc[51] = "Marne";
            print_r($dep_assoc);
        ?>
</div>
<div class="exo">
        <h1>Exercice 8</h1>
        <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
        <?php 
            for($i = 0; $i < sizeof($mois); $i++){
                echo $mois[$i] . "<br>";
            }
        ?>
</div>
<div class="exo">
        <h1>Exercice 9</h1>
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
        <?php 
            foreach($dep_assoc as $item){
                echo $item . "<br>";
            }
        ?>
</div>
<div class="exo">
        <h1>Exercice 10</h1>
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement</p>
        <?php 
            foreach($dep_assoc as $key => $value){
                echo "Le département $value a le numéro $key <br>";
            }
        ?>
</div>
</body>
</html>