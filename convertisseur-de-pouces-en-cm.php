<form action="" method="get">
    <label for="pouce">Pouce :</label>
    <input type="text" id="pouce" name="pouce" <?php pouceValue('pouce') ?>>

    <input type="submit" value="Convertir">
</form>

<?php
    /** Fonction qui convertie un pouce en centimètre.
     * 
     */
    function convertirPouceEnCentimetre($nombrePouce){
        return $nombrePouce * 2.54;
    }

    if (!empty($_GET)) {
        if (!empty($_GET['pouce'])) {

            // Vérifie que l'utilisateur entre bien un chiffre
            if (is_numeric($_GET['pouce'])) {

                // Vérifie que l'utilisateur entre un chiffre > 0
                if ($_GET['pouce'] > 0) {
                    $resultat = convertirPouceEnCentimetre($_GET['pouce']);

                    // Changer le . en ,
                    $resultat = (string) $resultat;
                    $resultat = str_replace('.', ',', $resultat);
                    echo htmlentities($resultat);
                } else {
                    echo "Veuillez entrer un chiffre supérieur à 0";
                }
            } else {
                echo "Veuillez entrer un chiffre";
            }
        }else {
            echo "Veuillez entrer un chiffre supérieur à 0 avant conversion";
        }
    } 

    /** Fonction qui ajoute un attribut value à un input avec pour valeur celle du paramètre d'url.
     * 
     */
    function pouceValue($value){
        if (!empty($_GET["$value"])) {
            echo 'value="'.htmlentities($_GET["$value"]) . '"';
        }
    }
?>