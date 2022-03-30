<!DOCTYPE html>
<html lang="en">
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
Abdelkader', 'Agenor', 'Alexys', 'Anaut', 'Ararat', 'Atilla'
,'Abdel-Kader', 'Agilbert', 'Alfons', 'Ancel', 'Arcade', 'Atman', 'Abdelkarim', 'Agnel', 'Alfonse', 'Ancelin', 'Arcadie', 'Atmane','Abdel-Karim', 'Agostino', 'Alfonso', 'Ancelot','Arcady', 'Atom',' Smith','Martin','Jones','Brown','Thomas','Johnson', 'Williams','Wilson','Miller','Taylor','Davis','Bernard','White','Clark','Hall','Robert','Anderson','Richard','Henry','Thompson','Moore','Roux','Hill','Petit','Anderson','Simon','Walker','Dubois','Michel','Durand','Wright','Wood','Scott','Allen','Moreau','Robinson','ADAMS','YOUNG','LEWIS','DAVID','Jackson','King','John','Green','Baker','Evans','Campbell','Lambert','Roy','James','Hansen','Trynsiki','Harris','Laurent','Robert','Girard','Olsen','Stewart','Bertrand','Blanc','George','Fournier','Lee','Morel','Vincent','Parker','County','Rousseau','Mc turner','Cook','Garnier','GUERIN','BELL','ANDRE','WARD','MORRIS','EDWARDS',
'MITCHELL','JONSSON','FAURE','JOHANSSON','MERCIER','WATSON','BONNET','PEDERSEN','LEROY','MORGAN','MORIN','ANDERSDR','GAUTIER','COOPER',',GRAY','PERRIN','DUPONT','JENSEN','Shane Barnes','Jeffrey Vang','Gloria Matthews','Annette Sloan','Angela Davis','Jonathan Bradley','Katherine King','Christopher Owens','Robert Wu','Ryan Zavala','Jennifer Mclean','Lauren Mata','Victoria Parker','Melissa Woods','Madison Small','Anita Snow','Rachel Kidd','James Ewing','Jeffery Mccullough','Mary Adams','Kelly Bean','Michael Cochran','Megan Richardson','Dale Thomas','Elizabeth Chang','Ryan Hoffman','John Rowe','Brian Suarez','Brittney Castillo','Brandon Cox','Gregory Brown','Vanessa Mccarthy','Michael Padilla','Kristi Williams','Emily Chen','Amy Wang','Teresa Gonzalez','Richard Greene','Jessica Ward','Robert Ramos','Jessica Hicks','Mr. Eric Williams','Bryan Malone','Joseph Jimenez','David Morgan','Linda Wells','Andrea Stone','Pamela Thomas','Michael Henderson','Carlos Hunt','Justin Robinson','Elizabeth Walker','Kevin Garrison','Taylor Adams','Kelly Anderson','Tiffany Smith','James Cohen','Nicolas Rodriguez','Jamie Smith','Kristen Phillips','Joseph Howell','Marissa Jennings','Lisa Lynn','Darryl Roberts','Brandy Berry'];

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
