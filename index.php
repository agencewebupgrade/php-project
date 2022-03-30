<?php

//déclaration d'un tableau pour  scanner les fichiers
$tools = scandir('tools');

//On enleve les points du tableau initial
$scanned_directory = array_diff($tools, array('..', '.'));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
</head>
<body>
    <?php include("header.php") ?>
    <main>
        <h2>Liste d'outils</h2>
        
        <ul>
            <?php 
            foreach($scanned_directory as $tool){
                echo '<li >'.'<a href= tools/'.$tool.'>'.$tool.'</a>'.'</li>';
            }
            ?>
            <li><a href="tools/convertisseur-min-MAJ/convertisseur-min-MAJ.php">convertisseur-min-maj.php</a></li>
        </ul>
    </main>

    <?php include("footer.php") ?>
</body>
</html>