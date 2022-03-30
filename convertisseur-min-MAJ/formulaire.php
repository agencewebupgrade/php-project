<?php

    function formulaire() {
    echo '
    <form method="POST">
            <p><textarea type="text" name="string" placeholder="Entrer une phrase" value="" ></textarea></p>
            <p>Mettre en MAJUSCULES<input type="radio" name="majusculesOuMinuscules" value="majuscules"/></p>
            <p>Mettre en minuscules<input type="radio" name="majusculesOuMinuscules" value="minuscules"/></p>
            <p><input type="submit" /></p>
    </form>
    ';
    }