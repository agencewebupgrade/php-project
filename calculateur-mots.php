<?php

//on affiche directement notre formulaire
echo '
<form method="POST">
        <p><textarea type="text" name="string" placeholder="Entrer une phrase pour avoir son nombre de mots"></textarea></p>
        <p><input type="submit" /></p>
</form>
';

function calculateurMots($chaineCaractere) {//on définit la fonction qui calcule le nombre de mots
    $numberOfWords = str_word_count($chaineCaractere); //on définit la variable qui contient le nombre de mots dans la phrase renseignée par l'utilisateur
    return 'Il y a '.$numberOfWords.' mots dans la phrase "'.$chaineCaractere.'"'; //on retourne une phrase avec le nombre de mots et la phrase d'origine
}

if (isset($_POST['string']) && !empty($_POST['string'])) {//on vérifie qu'une phrase a bien été renseignée
    echo calculateurMots(htmlentities($_POST['string']));//on affiche le retour de notre fonction
}else{
    echo 'Renseignez une phrase';//on affiche ceci dans le cas ou l'utilisateur arrive juste sur le site ou qu'il n'a pas renseigné de phrase
}

