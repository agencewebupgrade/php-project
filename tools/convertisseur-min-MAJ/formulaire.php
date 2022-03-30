<?php

    function formulaire() {//définition de la fonction formulaire

    ?>
    <form method="POST">

            <p>
                <textarea name="string"><?php 
                if (!empty($_POST['string'])) {
                    echo htmlspecialchars(htmlentities($_POST['string'])); 
                } 
                ?></textarea>
            </p>
            <p>Mettre en MAJUSCULES<input type="radio" name="majusculesOuMinuscules" value="majuscules"/></p>
            <p>Mettre en minuscules<input type="radio" name="majusculesOuMinuscules" value="minuscules"/></p>
            <p><input type="submit" /></p>
    </form>
    <?php
    }
