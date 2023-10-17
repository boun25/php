<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//exso 1
$fuseau = date_default_timezone_get();
echo $fuseau;
echo "<br>";
echo date("j m y"). "<br>"; 
echo date("n m s")."<br>"; 


//exso 2
setlocale(LC_TIME, "french");//on definit le jour en francais
echo strftime("%A"). "<br>"; 

//exso 3
 $anneeDeNaissance = "1997";
$jj=date('Y');
$datte =$jj-$anneeDeNaissance;
echo $datte;
echo "<br>";
//ex4


 //date et heures    
   $dateTemps = date("Y-m-d");    
     echo "date: $dateTemps";

?>
</body>
</html>