<?php

    include 'formulaire.php';

    function mettreEnMajuscules($chaineCaractere) {//on définit la fonction qui met en MAJUSCULES
        $upperWords = strtoupper($chaineCaractere); //on définit la variable qui contient la nouvelle chaine de caracteres en majuscules
        return $upperWords; //on retourne une chaine de caracteres en majuscules
    }

    function mettreEnMinuscules($chaineCaractere) {//on définit la fonction qui met en minuscules
        $lowerWords = strtolower($chaineCaractere); //on définit la variable qui contient la nouvelle chaine de caracteres en minuscules
        return $lowerWords; //on retourne une chaine de caracteres en minuscules
    }

    if (isset($_POST['string'])) {//on vérifie qu'une phrase a bien été renseignée

        if (isset($_POST['majusculesOuMinuscules'])) {

            if ($_POST['majusculesOuMinuscules'] == 'minuscules') {
                echo mettreEnMinuscules(htmlentities($_POST['string']));;//on affiche le retour de notre fonction

            }elseif($_POST['majusculesOuMinuscules'] == 'majuscules') {
                echo mettreEnMajuscules(htmlentities($_POST['string']));;//on affiche le retour de notre fonction
            }else {
                echo 'Erreur';
            }

        }else {
            echo 'Veuillez cocher une case : Mettre en majuscules ou Mettre en minuscules <br>';
            formulaire();

        }

    }else{
        echo 'Renseignez une phrase !';//on affiche ceci dans le cas ou l'utilisateur arrive juste sur le site ou qu'il n'a pas renseigné de phrase
        formulaire();
    }