<form action="" method="get">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre" <?php inputValue('nombre') ?>>

    <label for="puissance">Puissance :</label>
    <input type="text" name="puissance" id="puissance" <?php inputValue('puissance') ?>>

    <input type="submit" value="Calculer">
</form>

<?php 

    if (!empty($_GET)) {
        if (!empty($_GET['nombre']) && !empty($_GET['puissance'])) {

            // Vérifie que l'utilisateur entre bien un chiffre
            if (is_numeric($_GET['nombre']) && is_numeric($_GET['puissance'])) {
                $resultat = pow($_GET['nombre'], $_GET['puissance']);

                // Changer le . en ,
                $resultat = str_replace('.', ',', $resultat);
                echo htmlentities($resultat);
            } else {
                echo "Veuillez entrer un chiffre";
            }
        } else {
            echo "Veuillez completer les champs";
        }
    }

    /** Fonction qui ajoute un attribut value à un input avec pour valeur celle du paramètre d'url.
     * 
     */
    function inputValue($value){
        if (!empty($_GET["$value"])) {
            echo 'value="'.htmlentities($_GET["$value"]) . '"';
        }
    }
?>