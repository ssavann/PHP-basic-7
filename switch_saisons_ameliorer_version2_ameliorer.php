<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<h2 align="center">
<?php
    

    $leMois = ''; //Pour definir la variable par defaut en tant que vide. Sinon, erreur.


    //Deuxieme etaple, valider si le bouton "Valider" est appuye par l'utilisateur
    if(isset($_POST['valider'])){   
    $leMois = $_POST['mois'];  //le mot "mois" vient du <select name="mois"> dans le calendrier
    
            if(($leMois == 12) || ($leMois <= 2)){
                echo 'Nous sommes en hiver';
            }elseif(($leMois >= 3) && ($leMois <= 5)){
                echo 'Nous sommes au printemps';
            }elseif(($leMois >= 6) && ($leMois <= 8)){
                echo 'Nous sommes en ete';
            }elseif(($leMois >= 9) && ($leMois <= 11)){
                echo 'Nous sommes en automne';
            }
    }
?>

</h2>

<!-- Premiere etape, ecrire le formulaire des mois -->
<form method="post" action="">

    <p align="center">
        <select name="mois">
            <option value="1" <?php if($leMois == 1) {echo 'selected="selected"';} ?>>Janvier</option>
            <option value="2" <?php if($leMois == 2) {echo 'selected="selected"';} ?>>Fevrier</option>
            <option value="3" <?php if($leMois == 3) {echo 'selected="selected"';} ?>>Mars</option>
            <option value="4" <?php if($leMois == 4) {echo 'selected="selected"';} ?>>Avril</option>
            <option value="5" <?php if($leMois == 5) {echo 'selected="selected"';} ?>>Mai</option>
            <option value="6" <?php if($leMois == 6) {echo 'selected="selected"';} ?>>Juin</option>
            <option value="7" <?php if($leMois == 7) {echo 'selected="selected"';} ?>>Juillet</option>
            <option value="8" <?php if($leMois == 8) {echo 'selected="selected"';} ?>>Aout</option>
            <option value="9" <?php if($leMois == 9) {echo 'selected="selected"';} ?>>Septembre</option>
            <option value="10" <?php if($leMois == 10) {echo 'selected="selected"';} ?>>Octobre</option>
            <option value="11" <?php if($leMois == 11) {echo 'selected="selected"';} ?>>Novembre</option>
            <option value="12" <?php if($leMois == 12) {echo 'selected="selected"';} ?>>Decembre</option>

            <!-- pour que le mois reste selectionner lorsque l'utilisateur choisi un mois, au lieu d'avoir Janvier comme defaut -->
        </select>

        <input type="submit" name="valider" value="Valider" />

    </p>


</form>

</body>
</html>