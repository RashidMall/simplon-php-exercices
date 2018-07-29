<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boucles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="exo">
        <h1>Exercice 1</h1>
        <p>Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut : l'afficher l'incrementer. </p>
        <?php 
            $variable = 0;
            while($variable < 10){
                echo $variable++;
                echo ' ';
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 2</h1>
        <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 : multiplier la première variable avec la deuxième afficher le résultat incrementer la première variable.</p>
        <?php 
            $variable1 = 0;
            $variable2 = rand(1, 100);
            while(!($variable1 > 20)){
                echo $variable1 * $variable2;
                echo ' ';
                $variable1++;
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 3</h1>
        <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas inférieur ou égale à 10 : multiplier la première variable avec la deuxième afficher le résultat décrémenter la première variable.</p>
        <?php 
            $variable1 = 100;
            $variable2 = rand(1, 100);
            while($variable1 >= 10){
                echo $variable1 * $variable2;
                echo ' ';
                $variable1--;
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 4</h1>
        <p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut : l'afficher l'incrementer de la moitié de sa valeur. </p>
        <?php 
            $variable = 1.0;
            while($variable <= 10){
                echo $variable;
                echo ' ';
                $variable += $variable / 2;
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 5</h1>
        <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
        <?php 
            for($i = 1; $i <= 15; $i++){
                echo 'On y arrive presque. ';
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 6</h1>
        <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
        <?php 
            for($i = 20; $i > 0; $i--){
                echo "C'est presque bon. ";
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 7</h1>
        <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
        <?php 
            for($i = 1; $i <= 100; $i += 15){
                echo 'On tient le bon bout. ';
            }
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 8</h1>
        <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
        <?php 
            for($i = 200; $i >= 0; $i -= 12){
                echo 'Enfin!!!! ';
            }
        ?>
    </div>
</body>
</html>