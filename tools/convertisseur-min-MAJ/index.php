<?php

    include 'formulaire.php';//on inclus le fichier formulaire.php qui contient la fonction formulaire()

    function mettreEnMajuscules($chaineCaractere) {//on définit la fonction qui met en MAJUSCULES
        $upperWords = strtoupper($chaineCaractere); //on définit la variable qui contient la nouvelle chaine de caracteres en majuscules
        return $upperWords; //on retourne une chaine de caracteres en majuscules
    }

    function mettreEnMinuscules($chaineCaractere) {//on définit la fonction qui met en minuscules
        $lowerWords = strtolower($chaineCaractere); //on définit la variable qui contient la nouvelle chaine de caracteres en minuscules
        return $lowerWords; //on retourne une chaine de caracteres en minuscules
    }

    if (!empty($_POST['string']) && trim($_POST['string']) != "") {//on vérifie qu'une phrase a bien été renseignée

        if (!empty($_POST['majusculesOuMinuscules'])) {//on vérifie qu'une des cases "Majuscules" ou "Minuscules" est cochée

            if ($_POST['majusculesOuMinuscules'] == 'minuscules') {//dans le cas ou la case minuscules a été cochée
                echo mettreEnMinuscules(htmlentities($_POST['string']));;//on affiche le retour de notre fonction mettreEnMinuscules
                
            }elseif($_POST['majusculesOuMinuscules'] == 'majuscules') {//dans le cas ou la case majuscules a été cochée
                echo mettreEnMajuscules(htmlentities($_POST['string']));;//on affiche le retour de notre fonction mettreEnMajuscules

            }else {//dans les autres cas on affiche une erreur
                echo 'Erreur';
            }

        }else {//si aucune des cases n'a été cochée
            echo 'Veuillez cocher une case : Mettre en majuscules ou Mettre en minuscules <br>';
            formulaire();//on appelle la fonction formulaire
        }

    }else{//quand on arrive sur le formulaire
        echo 'Renseignez une phrase !';//on affiche ceci dans le cas ou l'utilisateur arrive juste sur le site ou qu'il n'a pas renseigné de phrase
        formulaire();//on appelle la fonction formulaire
    }