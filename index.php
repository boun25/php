<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page</title>
</head>
<body>
    <a href="opSurVar.php">Opération sur Variable</a>
    <a href="date.php">date</a>
    <a href="TP.php">TP.PHP</a>
    <br />
    <?php
    // J'affiche le prénom
    echo "paul";
    echo "<br>"; // Je saute une ligne
    #Ceci est un commentaire
    echo "ochon";
    echo "<br> paul ochon";
    /* 
        Les commentaires vous aideront lorsque vous reviendrez
        dans 6 mois quand vous aurez tout oublié
    */
    echo "<br>super";
    echo "<br>";

    /* si vous souhaitez voir les caractères qui sont utilisés pour entourer les mots */
    echo 'j\'écris à l\'encre de chine';

    /* Le caractère anti-slash précise le 2ème apostrophe qui échappe ainsi à sa fonction naturelle qui est d'entourer des chaînes de caractères. Dans le code ici, on met des guillemets au début et à la fin du texte et il n'est donc pas nécessaires d'échapper l'apostrophe. Par contre il faut échapper le guillent du prénom.
    */
    echo "<br> J'envoie des lettres à \"ma dulcinée\"";

    /* Les variables 
        Une variable est un conteneur d'une donnée unique, c'est à dire une boîte à chaussures qui ne contient qu'une seule chaussure.
        Une variable contient une information temporaire qui peut être numérique, de type alphabétique (chaîne de caractère), de type date, de type objet ou autre types.
    */
    $largeur = 5;
    echo $largeur;

    /* Le nom d'une variable doit commencer par le caractère $ suivie d'une lettre ou un signe _ (barre du huit) et on ne doit jamais commencer par un chiffre . Le nom des variables sont sensibles à la casse (Majuscule/minuscule).

    Le signe = sert donc à affecter une valeur à la variable, il s'agit d'un opérateur d'affectation et non le signe égal que l'on utilise dans une opération de calcul
    */


    $prenom = "téo";
    $nom = "durant";
    $prenom_nom = $prenom." ".$nom;
    echo "<br>".$prenom_nom;


    /** 
     *  fonction qui s'appliquent aux variables
     * 
     * srtlen(variable): renvoie la longueur d'une chaîne de caractère.
     * substr(variable, début longueur): renvoie une partie de la chaîne de caractère
     * trin(variable): supprime les espaces (ou d'autres caractères) en début et en fin de chaîne.
     * number_format(variable *point ou point virgule*, *caractère pour les milliers)
     * round(varaible, nombre de décimale): arrondit le nombre.
     *      
     * 
     */
    $nom2 = "MARIE ROSE";
    echo strlen($nom2); // affiche 10 à cause des espaces
    echo "<br>";
    var_dump($nom2); // affiche string (10) "MARIE ROSE"
    echo "<br>";
    echo trim($nom2); // affiche MARIE ROSE sans espace
    echo "<br>";
    echo substr($nom2, 3, 5); 
    echo "<br>";
    echo $prix = 2050900.7854;
    echo "<br>";
    echo number_format($prix, 2, ", ", " "); // affiche 2 050 900.79 en plaçant 2 décimales après un point et un espace comme séparateur de milliers.
    echo "<br>";
    echo number_format($prix, 2, ".", " ");
    echo "<br>";
    echo round($prix, 1); // arrondit à une décimale
    
    
    // AFFECTATION DE VARAIABLES PAR VALEUR OU PAR ALIAS

    /**
     *  lorsqu'on affecte une donnée dans une variable, on dit quon affect la variable par valeur. Toutefois, on pourrait aussi créer un alias à une autre variable. On dit parfois qu'on affect la variable par référence.
     * Pour créer un alias vers une autre varaiable, on utlise le signe & (et commercial ou esperluette).
     * 
     */
    echo "<br>";
    $v1 = "Jacque Chirac <br>";
    $alias = &$v1; // créer un alias vers $v1
    $alias = "Mon nom est $alias";
    echo $alias;

    $prenom2 = "Alain";
    echo " salut les gars lon nom est :" .$prenom2. " Sébastien";



    
    ?>
</body>
</html>