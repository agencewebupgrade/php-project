<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversseur de nombre</title>
</head>
<body>
<form >
           
    <input type="number" step="0.001" name="choosedNumber" placeholder="nombre a inverssé" require/><br>
    <input type="submit" />

</form>

<?php
    if (!empty(isset($_GET["choosedNumber"]))){
        if(floatval($_GET["choosedNumber"]<0)){
            $getPositivNumber = $_GET['choosedNumber'] - $_GET['choosedNumber']* 2;
           echo "Le retour de votre nombre en positif est " . floatval($getPositivNumber);
        }else{
            echo"Le retour de votre nombre en négatif est " . floatval($_GET['choosedNumber'] - $_GET['choosedNumber']* 2);
        }
    }else {
        echo 'la donné est incorrect ou n\'est pas un nombre';
    }
?>
</body>
</html