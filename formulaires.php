<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaires</title>
</head>
<body>
<div class="exo">
    <h1>Exercice 1</h1>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    <form action="user.php" method="get">
        <p>Nom:</p>
        <input type="text" name="nom" />
        <p>Prénom</p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </form>
</div>
<div class="exo">
    <h1>Exercice 2</h1>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
    <form action="user.php" method="post">
        <p>Nom:</p>
        <input type="text" name="nom" />
        <p>Prénom</p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </form>
</div>
<div class="exo">
    <h1>Exercice 3</h1>
    <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
    <?php 
    ?>
</div>
<div class="exo">
    <h1>Exercice 4</h1>
    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
    <?php
    ?>
</div>
<div class="exo">
    <h1>Exercice 5</h1>
    <p>Créer un formulaire sur la page index.php avec : Une liste déroulante pour la civilité (Mr ou Mme) Un champ texte pour le nom Un champ texte pour le prénom Ce formulaire doit rediriger vers la page index.php. Vous avez le choix de la méthode.</p>
    <form action="formulaires.php" method="post">
            <select name="civilite" id="">
                <option value="Mr.">Mr.</option>
                <option value="Mme.">Mme</option>
            </select>
        <input type="submit" value="Valider">
    </form>    
    <?php 
        if(isset($_POST['civilite'])){
            echo 'Bonjour ' . $_POST['civilite'] . ' Smith';
        }
    ?>
</div>
<div class="exo">
    <h1>Exercice 6</h1>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse. Utiliser qu'une seule page.</p>
    <?php 
        if(isset($_POST['civilite'])){
            echo 'Bonjour ' . $_POST['civilite'] . ' Smith';
        }else{
            ?>
            <form action="formulaires.php" method="post">
                <select name="civilite" id="">
                    <option value="Mr.">Mr.</option>
                    <option value="Mme.">Mme</option>
                </select>
                <input type="submit" value="Valider">
            </form>
            <?php
        }
    ?>
</div>
<div class="exo">
    <h1>Exercice 7</h1>
    <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
    <?php
        if(isset($_FILES['fichier']) && !($_FILES['fichier']['error'])){
            // Check if the uploaded file is not larger than 1Mo
            if($_FILES['fichier']['size'] < 1000000){
                move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
                echo "Fichier envoyé " . basename($_FILES['fichier']['name']);
            }else{
                echo 'Fichier trop gros';
            }
        }else{
            ?>
            <form action="formulaires.php" method="post" enctype="multipart/form-data">
                <p>
                    Envoyer un fichier:<br/>
                    <input type="file" name="fichier" id="fichier"/><br/>
                    <input type="submit" value="Envoyer le fichier">
                </p>
            </form>
            <?php
        }
    ?>
</div>
<div class="exo">
    <h1>Exercice 8</h1>
    <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>
    <?php
        if(isset($_FILES['fichier2']) && !($_FILES['fichier2']['error'])){
            // Check if the uploaded file is not larger than 1Mo
            if($_FILES['fichier2']['size'] < 10000000){
                // Check if the file extension is .pdf
                $infosfile = pathinfo($_FILES['fichier2']['name']);
                // print_r($infosfile);
                $extension_upload = $infosfile['extension'];
                // echo $extension_upload . '<br>';
                if($extension_upload === 'pdf'){
                    move_uploaded_file($_FILES['fichier2']['tmp_name'], 'uploads/' . basename($_FILES['fichier2']['name']));
                    echo "Fichier envoyé " . basename($_FILES['fichier2']['name']);
                }else{
                    echo "Le format du fichier n'est pas pdf";
                }
            }else{
                echo 'fichier trop gros';
            }
        }else{
            ?>
            <form action="formulaires.php" method="post" enctype="multipart/form-data">
                <p>
                    Envoyer un fichier:<br/>
                    <input type="file" name="fichier2" id="fichier2"/><br/>
                    <input type="submit" value="Envoyer le fichier">
                </p>
            </form>
            <?php
        }
    ?>
</div>
</body>
</html>