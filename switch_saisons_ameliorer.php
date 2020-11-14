<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<h2 align="center">
<?php

    //Deuxieme etaple, valider si le bouton "Valider" est appuye par l'utilisateur
    if(isset($_POST['valider'])){
        
   
    $leMois = $_POST['mois'];  //le mot "mois" vient du <select name="mois"> dans le calendrier
    switch($leMois){

            case 12:
            case 1:                
            case 2:
                echo 'Nous sommes en hiver';
                break;
            case 3:                
            case 4:                
            case 5:
                echo 'Nous sommes au printemps';
                break;
            case 6:              
            case 7:                
            case 8:
                echo 'Nous sommes en ete';
                break;
            case 9:              
            case 10:               
            case 11:
                echo 'Nous sommes en automne';
                break;
            
                





        }

    }
?>

</h2>

<!-- Premiere etape, ecrire le formulaire des mois -->
<form method="post" action="">

    <p align="center">
        <select name="mois">
            <option value="1">Janvier</option>
            <option value="2">Fevrier</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Aout</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Decembre</option>
        </select>

        <input type="submit" name="valider" value="Valider" />

    </p>


</form>

</body>
</html>