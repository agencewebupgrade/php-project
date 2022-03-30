<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de Mot de Passe</title>
</head>
<body>
    
    <h1>Générateur de mot de passe</h1>
    <br>
    <p>Sélectionnez les options de votre mot de passe sécurisé:</p>
    <form method="POST">
        <!-- Checkbox: password avec chiffres -->
        <div>
            <input type="checkbox" id="chiffre" name="chiffre" value="isChecked">
            <label for="chiffre">Avec des chiffres [ 0 1 2 3 4 5 6 7 8 9 ]</label>
        </div>
        <!-- Checkbox: password avec lettres minuscules -->
        <div>
            <input type="checkbox" id="lettreMin" name="lettreMin" value="isChecked">
            <label for="lettreMin">Avec des lettres minuscules [ a b c ... x y z ]</label>
        </div>
        <!-- Checkbox: password avec lettres majuscules -->
        <div>
            <input type="checkbox" id="lettreMaj" name="lettreMaj" value="isChecked">
            <label for="lettreMaj">Avec des lettres majuscules [ A B C ... X Y Z ]</label>
        </div>
        <!-- Checkbox: password avec caractères spéciaux -->
        <div>
            <input type="checkbox" id="caracSpec" name="caracSpec" value="isChecked">
            <label for="caracSpec">Avec des caractères spéciaux [ ~ ! @ # $ % ^ & * ( ) - _ = + [ ] { } ; : , . < > / ? | ]</label>
        </div>
        <!-- Checkbox: password sans caractères similaires -->
        <div>
            <input type="checkbox" id="caracSim" name="caracSim" value="isChecked">
            <label for="caracSim">Sans des caractères similaire [ 0 O I 1 l ]</label>
        </div>
        <!-- Number: nombre de caractères dans le password -->
        <div>
            <input type="number" id="caracNumber" name="caracNumber" min="10" max="20" value="10">
            <label for="caracNumber">Nombre de caractères dans le mot de passe</label>
        </div>
        <!-- Number: nombre de caractères dans le password -->
        <div>
            <input type="number" id="passwordNumber" name="passwordNumber" min="1" max="10" value="1">
            <label for="passwordNumber">Nombre de mot de passe à créer (générer plusieurs mot de passe à la fois)</label>
        </div>
        <input type="submit" value="Créer votre mot de passe">
    </form>

    <?php 
        

        if (!empty($_POST) && ( !empty($_POST['chiffre']) || !empty($_POST['lettreMin']) || !empty($_POST['lettreMaj']) || !empty($_POST['caracSpec']) )) {
            $chars = getChaine($_POST);
            
        } else {
            echo '<br><hr>Vous devez choisir au moins une méthode';
        }
        echo '<pre>';
        print_r($_POST);
        echo $chars;
        echo '</pre>';
    
    
        function getChaine( $array ) {
            $chaine = '';

            //Si | Checkbox: password avec chiffres | a été coché
            if ( !empty($array['chiffre']) && $array['chiffre'] == 'isChecked' ) {
                $chaine .= '1234567890';
            }

            //Si | Checkbox: password avec lettres minuscules | a été coché
            if ( !empty($array['lettreMin']) && $array['lettreMin'] == 'isChecked' ) {
                $chaine .= 'abcdefghijklmnopqrstuvwxyz';
            }

            //Si | Checkbox: password avec lettres majuscules | a été coché
            if ( !empty($array['lettreMaj']) && $array['lettreMaj'] == 'isChecked' ) {
                $chaine .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }

            //Si | Checkbox: password avec caractères spéciaux | a été coché
            if ( !empty($array['caracSpec']) && $array['caracSpec'] == 'isChecked' ) {
                $chaine .= '~!@#$%^&*()-_=+[]{};:,.<>/?|';
            }

            //Si | Checkbox: password sans caractères similaires | a été coché
            if ( !empty($array['caracSim']) && $array['caracSim'] == 'isChecked' ) {
                $chaineArray = str_split($chaine);
                $forbiddenChars = ['O','I','l',0,1];
                $chaineNettoye = array_diff($chaineArray, $forbiddenChars);
                $chaine = implode('', $chaineNettoye);
            } 
            return $chaine;
        }
    ?>








</body>
</html>