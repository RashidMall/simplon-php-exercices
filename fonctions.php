<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les fonctions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="exo">
        <h1>Exercice 1</h1>
        <p>Faire une fonction qui retourne true.</p>
        <?php 
            function myFunction1(){
                return true;
            }
            echo myFunction1();
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 2</h1>
        <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
        <?php 
            function myFunction2($v){
                return $v;
            }
            echo myFunction2('Hey Hey');
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 3</h1>
        <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.</p>
        <?php 
            function myFunction3($v1, $v2){
                return "$v1 $v2";
            }
            echo myFunction3('Hello', 'World');
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 4</h1>
        <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner : Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième Les deux nombres sont identiques si les deux nombres sont égaux.</p>
        <?php 
            function compareNumbers($nb1, $nb2){
                $result = '';
                if($nb1 > $nb2){
                    $result = 'Le premier nombre est plus grand.';
                }else if($nb1 < $nb2){
                    $result = 'Le premier nombre est plus petit.';
                }else if($nb1 === $nb2){
                    $result = 'Les deux nombres sont identiques.';
                }
                return $result;
            }
            echo compareNumbers(5, 5);
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 5</h1>
        <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
        <?php 
            function concatParams($nb, $str){
                return "$nb $str";
            }
            echo concatParams(12, 'Monkeys');
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 6</h1>
        <p>Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>
        <?php 
            function bonjourMachin($nom, $prenom, $age){
                return "Bonjour $nom $prenom, tu as $age ans.";
            }
            echo bonjourMachin('Mallaev', 'Rashid', 32);
        ?>
    </div>
    <div class="exo">
        <h1>Exercice 7</h1>
        <p>Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur : 
            Homme Femme La fonction doit renvoyer en fonction des paramètres : 
            Vous êtes un homme et vous êtes majeur Vous êtes un homme et vous êtes mineur Vous êtes une femme et vous êtes majeur Vous êtes une femme et vous êtes mineur Gérer tous les cas.</p>
        <?php 
            function ageGenre($age, $genre){
                $result1 = 'Vous êtes un';
                $result2 = ' et vous êtes ';
                if($genre == 'homme'){
                    $result1 = $result1 . ' homme';
                }else if($genre == 'femme'){
                    $result1 = $result1 . 'e femme';
                }else{
                    $result1 = $result1 . ' <strong>unknown</strong>';
                }
                if($age < 18 && $age >= 0){
                    $result2 = $result2 . 'mineur';
                }else if($age >= 18){
                    $result2 = $result2 . 'majeur';
                }else{
                    $result2 = $result2 . ' <strong>unknown</strong>';
                }

                return $result1 . ' ' . $result2 . '<br>';
            }

            echo ageGenre(32, 'homme');
            echo ageGenre(5, 'homme');
            echo ageGenre(32, 'femme');
            echo ageGenre(3, 'femme');
            echo ageGenre(-12, 'machin');

        ?>
        </div>
    <div class="exo">
        <h1>Exercice 8</h1>
        <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut.</p>
        <?php 
            function sumNumbers($nb1 = 1, $nb2 = 2, $nb3 = 3){
                return $nb1 + $nb2 + $nb3;
            }

            echo sumNumbers(2,2,2);
        ?>
    </div>
</body>
</html>