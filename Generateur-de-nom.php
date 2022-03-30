<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de nom</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="nbNoms" min="0">
    <input name="generer" type="submit" value="Générer un/des nom(s)">
</form>

<?php
    // Tableau avec des noms à l'intérieur
$noms = [1=>'Aadil', 'Adler', 'Alec', 'Amos', 'Aostin', 'Artus
Aaron', 'Adnan', 'Alejandro', 'Amour', 'Apolinarie', 'Arzel
Aba', 'Adnane', 'Aleksandar', 'An', 'Apollinaire', 'Arzhel
Abarran', 'Adolf', 'Alen', 'Anaclet', 'Apollo', 'Asbed
Abbes', 'Adolfino', 'Aler', 'Anaël', 'Apollon', 'Ashley
Abdallah', 'Adolfo', 'Ales', 'Anaia', 'Apolo', 'Ashraf
Abdel', 'Adolphe', 'Alesander', 'Anane', 'Apolon', 'Aslam
Abd-el', 'Adom', 'Alessandro', 'Anania', 'Appolinaire', 'Aslan
Abdelali', 'Adon', 'Alessio', 'Ananias', 'Aquilain', 'Aspet
Abdelazim', 'Adonis', 'Alex', 'Anas', 'Aquilles', 'Assad
Abdèlaziz', 'Adrial', 'Alexander', 'Anass', 'Ara', 'Assadour
Abdelbari', 'Adrian', 'Alexandre', 'Anasse', 'Arad', 'Assane
Abdelghani', 'Adriano', 'Alexandro', 'Anastas', 'Arafat', 'Assim
Abdèlhadi', 'Adriel', 'Alexandros', 'Anastase', 'Araïg', 'Astérix
Abdelhafid', 'Adrien', 'Alexei', 'Anastasio', 'Araïk', 'Atanas
Abdel-Hakim', 'Ael', 'Alexi', 'Anasthase', 'Arakel', 'Atef
Abdelhalim', 'Aelig', 'Alexian', 'Anatol', 'Araldo', 'Athanaël
Abdelhamid', 'Afif', 'Alexios', 'Anatole', 'Aram', 'Athanase
Abdelilah', 'Agapetos', 'Alexis', 'Anatoli', 'Aramis', 'Athmane
Abdeljalil', 'Agathon', 'Alexy', 'Anatolio', 'Aran', 'Athos
Abdelkader', 'Agenor', 'Alexys', 'Anaut', 'Ararat', 'Atilla
Abdel-Kader', 'Agilbert', 'Alfons', 'Ancel', 'Arcade', 'Atman
Abdelkarim', 'Agnel', 'Alfonse', 'Ancelin', 'Arcadie', 'Atmane
Abdel-Karim', 'Agostino', 'Alfonso', 'Ancelot', 'Arcady', 'Atom'];

    // On détermine la taille du tableau
$nomsLenght = count($noms);
    // On choisit aléatoirement un nombre entre 0 et la taille du tableau
$randKey = mt_rand(0, $nomsLenght);

    // Si l'input est rempli
if (!empty($_POST['nbNoms'])) {
        // Si l'utilisateur choisit 1 seul nom
    if ($_POST['nbNoms'] == 1) {
        echo 'Votre nom généré est : '.$noms[$randKey];
    }else {
            // Si l'utilisateur choisit plusieurs noms
        $randKey = array_rand($noms, $_POST['nbNoms']);
        for ($i=0; $i<$_POST['nbNoms']; $i++)
        echo 'Votre nom généré N°'.($i+1).' est : '.$noms[$randKey[$i]].'<br>';
    }
}
?>
    
</body>
</html>
