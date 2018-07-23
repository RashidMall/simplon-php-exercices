# simplon-php-exercices

#PHP - Les boucles ##Exercice 1 Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer
##Exercice 2 Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :

multiplier la première variable avec la deuxième
afficher le résultat
incrementer la première variable
##Exercice 3 Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :

multiplier la première variable avec la deuxième
afficher le résultat
décrémenter la première variable
##Exercice 4 Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer de la moitié de sa valeur
##Exercice 5 En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.

##Exercice 6 En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.

##Exercice 7 En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.

##Exercice 8 En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.

#PHP - Les fonctions ##Exercice 1 Faire une fonction qui retourne true.

##Exercice 2 Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

##Exercice 3 Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines

##Exercice 4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux
##Exercice 5 Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.

##Exercice 6 Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans".

##Exercice 7 Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

Homme
Femme
La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas.

##Exercice 8 Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.

#PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes :

janvier
février
mars
avril
mai
juin
juillet
aout
septembre
octobre
novembre
décembre
##Exercice 2 Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

##Exercice 3 Avec le tableau de l'exercice , afficher la valeur de l'index 5.

##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

##Exercice 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

##Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

##Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

##Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement

#PHP - Les paramètres d'URL ##Exercice 1 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean

##Exercice 2 Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean

##Exercice 3 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016

##Exercice 4 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP

##Exercice 5 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12

##Exercice 6 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101

#PHP - Les formulaires Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....) ##Exercice 1 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.

##Exercice 2 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.

##Exercice 3 Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.

##Exercice 4 Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.

##Exercice 5 Créer un formulaire sur la page index.php avec :

Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom
Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.

##Exercice 6 Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.

##Exercice 7 Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

##Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.

#PHP - Variables superglobales, sessions et cookies Dans tous les exercices, il faudra faire une page HTML 5 valide et soigner son CSS. ##Exercice 1 Faire une page HTML permettant de donner à l'utilisateur :

son User Agent
son adresse ip
le nom du serveur
##Exercice 2 Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.

##Exercice 3 Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.

##Exercice 4 Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.

##Exercice 5 Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.

#PHP - Les dates Pour tous les exercices, vous pouvez utiliser le site http://php.net
N'hesitez pas à faire des pages avec du HTML/CSS ##Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)

##Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)

##Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.

##Exercice 4 Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00.

##Exercice 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.

##Exercice 6 Afficher le nombre de jour dans le mois de février de l'année 2016.

##Exercice 7 Afficher la date du jour + 20 jours.

##Exercice 8 Afficher la date du jour - 22 jours

##TP Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
En fonction des choix, afficher un calendrier comme celui ci :
