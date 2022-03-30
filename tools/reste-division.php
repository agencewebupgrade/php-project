<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reste d'une division</title>
</head>
<body>
    <h1>Calculateur d'un restant d'une division</h1>
    <form method="post">
        <input type="text" name="firstNumber" placeholder="Entrez un premier chiffre" required>
        <input type="text" name="secondNumber" placeholder="Entrez un second chiffre" required>
        <input type="submit" value="Calculer">
    </form>
</body>
</html>

<?php

if(!empty($_POST['firstNumber']) && !empty($_POST['secondNumber'])){

    $number1 = intval($_POST['firstNumber']);
    $number2 = intval($_POST['secondNumber']);

    if(is_int($number1) && is_int($number2)){
        if($number1 > $number2){
            $result =$number1%$number2;
            echo "Le reste de la division euclidienne est $result ";
        }elseif($number1 < $number2){
            $result =$number2%$number1;
            echo "Le reste de la division euclidienne est $result ";
        }else{
            echo "Le reste de la division euclidienne est 0";
        }

    }else{
        echo 'Veuillez entrer des données numériques entières';
    }
}elseif(empty($_POST['firstNumber'])){
    echo 'Veuillez entrer le premier chiffre';
}elseif(empty($_POST['secondNumber'])){
    echo 'Veuillez entrer le second chiffre';
}else{
    echo 'Veuillez entrer des données';
}