<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pile ou face</title>
</head>
<body>
    <h1>Simulateur de pile ou face</h1>
    <form action="" method="post">
        <input type="submit" name="simulate" value="Lancer">
    </form>
</body>
</html>

<?php


//Procédure permettant de simuler un jet de pie ou face au clique du bouton du formulaire
function pileFace(){

    //Condition de clique sur le bouton de simulation
    if(!empty($_POST['simulate'])){

        //Déclaration d'une variable donnant un chiffre aléatoire entre 0 et 1
        $chiffre = rand(0,1);

        //Déclaration d'une variable qui stockera si on a la valeur pile ou la valeur face
        $result =  ($chiffre == 1)? "Pile": "Face";

        //Affichage du résultat
        echo $result;
    }
}


//Lancemenet de la fonction
pileFace();