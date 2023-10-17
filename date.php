<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
/*
pour mutiplier les datas on utilise un groupe date /heure aussi appele temes-step qui est issu de la notation UNIX.
PHP utilise le fuseau horaire qui défini par defaut dans la rubrique [date] du finchier phph.ini.ce fichier. [date]
; data. timezone = "Europe/eRERLIN" 
VOUS POURVEZ RECUPERER le nom du fuseau horaire en cour par cle code i-dessous.
*/
//je recupere le fuseau haraire local
$fuseau = date_default_timezone_get();//affiche utf
echo $fuseau;

echo date("j m y"). "<br>"; // affiche la date au format 17 10 23
echo date("j m y"). "<br>";// affiche la date complaite  à  la francaise 
echo date("j m y"). "<br>";// affiche le 17 oct 2023
//setlocale(LC_TIME, "fr_FR");en français
echo strftime("%A")."<br>";
echo date ("D F Y"). "<rb>";
echo date ("D d F Y"). "<rb>";
/**
 * differents parametre de la date 
 * a  : am ou pm
 * A  : am ou pm
 * d  : jour du mois sur 2 chiffred
 * D  : le jour de la semaine en anglaise sur 3 lettres 
 * F  : le nom du mois en anglais  
 * J  : le jour sur un chiffre
 * m  : le numere du mois sur deux chiffres 
 * M  :  le numere du mois en anglais sur 3 lettrees 
 * n  : le numere du mois sur un chiffre
 * y  : l'annee sur 2 chiffre
 * Y  : l'annee sur 4 chiffreS
 * A : le numero du jour de la semaine (0 à 6 en comment par le demanche )
 * 
 * il est à noter que pour afficher les dates un format local , par exemple en francais, il faut utiliser
 * l'instruction "strftime avec les para_étres"
 */
  


 echo strftime("%A"). "<br>";
 setlocale(LC_TIME, "french"); //on definit le francais
 echo strftime("%A"). "<br>";
 echo strftime("%a"). "<br>";// AFFICHE TUES
 echo strftime("%A %d %B %Y"). "<br>";
 echo strftime("%d/%m%Y"). "<br>"; //en format 17/10/2023
 echo strftime("%d-%m-%Y"). "<br>";//en format 17/10/2023

 /**compresion de deux dates*/
 $Date1 = "15-09-2023";
 $Date2 = "02-09-2023";

 //je transforme les en timestamp
 $t1 = strtotime($Date1);
 echo "le 04/09/2023 est egale à ." .$t1. "secondes <br>";

 $t2 = strtotime($Date2);
 echo "le 17/10/2023 est egale à ." .$t2. "secondes <br>";

if($t1< $t2){
    echo"la premiére date est bien avance la 2éme date <br>";

}else{
    echo"la deuxieme date est bien avance la 1ere  <br>"; 
}

/*
tester la validite d'une date 
d'une maniers generale php est employé pour repondre a une interraction d'un client qui envoie ses informations 
vers un serveur par l'intermedier d'un formulaire . si la personne transfere des dates le programme php
devra à traiter : checkdate ()
cette fonction et un booleen . bien qui revois true ou  flase les parametre en entrée sont le mois de la date a teste le jour et l'anne.bien evidement le mois doit etre le 1 et 12, le jour doit etre compris entre 1 et 31 et les annee entre 1 et32767.
les annee bissextiles sont prisees en compte   

*/
echo checkdate(10,25,2022);
echo "<br>";
if(checkdate(96,25,2022)==false){
    echo "mauvaise date";
}else{
    echo "bonne date";
}


// date et heures 
     $dateTemps = date("Y-m-d H:i:s"); 
    echo "date actuelle: $dateTemps";











//Calculer, qelles étaient les années bissextiles de 1800 à nos jours
echo "<br>";
for($i = 1800; $i<2024; $i++ ){
    if(checkdate (02,29,$i)==true){
    echo $i." est une année bissectile"."<br>";
    }
}
    ?>
    
</body>
</html>