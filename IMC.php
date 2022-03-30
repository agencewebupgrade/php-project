
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculer votre IMC</h1>
    <form action="" method="post">
        <input type="text" name="poids" placeholder="Entrez votre poids(en kg)" value="<?php if(isset($_POST['poids'])){ echo strip_tags($_POST['poids']);}?>" required>
        <input type="text" name="taille" placeholder="Entrez votre taille(en mètres)" value="<?php if(isset($_POST['taille'])){ echo strip_tags($_POST['taille']);}?>" required>
        <input type="submit" value="Calculez votre IMC">
    </form>
</body>
</html>

<?php

//Procédure permettant de calculer son IMC
function calculIMC(){

    //Vérification que les donnéees existent et soient non nulles
    if(!empty($_POST['poids']) && !empty($_POST['taille'])){
        
        //Déclaration des données
        $poid = strip_tags(($_POST['poids']));
        $taille = strip_tags(($_POST['taille']));
        $virgule = ',';
        $point = '.';

        //Utilisaton de str_replace pour remplacer les ',' par des points '.'
        $poid = str_replace($virgule,$point,$poid);
        $taille =str_replace($virgule,$point,$taille);
        
        //Vérification que les données soient de type numérique.
        if(is_numeric($poid)&& is_numeric($taille)){
            
            //Calcul de l'IMC
            $IMC = round($poid / pow($taille,2),2);
            $IMC = str_replace($point,$virgule,$IMC);

            //Affichage de l'IMC
            echo "Votre IMC est de $IMC".'<br>';

            //Condition vérifiant votre IMC et plaçant la personne dans une catégorie
            switch($IMC){
                case $IMC<18.5 :
                    echo "Vous êtes en insuffisance pondérale.";
                    break;
                case $IMC>=18.5 && $IMC<25 :
                    echo "Vous avez une corpulence normale.";
                    break;
                case $IMC>=25 && $IMC<30 :
                    echo "Vous êtes en surpoids.";
                    break;
                case $IMC>=30 && $IMC<35 :
                    echo "Vous avez une obésité modérée.";
                    break;
                case $IMC>=30 && $IMC<35 :
                    echo "Vous avez une obésité sevère.";
                    break;
                case $IMC>=30 && $IMC<35 :
                    echo "Vous avez une obésité massive.";
                    break;  
            }
        }else{
            echo 'Veuillez entrez des données numériques';
        }
    }elseif(empty($_POST['poids'])){
        echo 'Veuillez entrer un poids.';
    }elseif(empty($_POST['taille'])){
        echo 'Veuillez entrer une taille';
    }else{
        echo 'Veuillez entrer des données.';
    }

}

calculIMC();


