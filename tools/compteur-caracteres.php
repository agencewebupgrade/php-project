<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de caractères</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="caract">
        <input type="submit" value="Compter le nombre de caractères">
    </form>

    <?php
        // On vérifie s'il y a quelque chose dans l'input 'caract'
    if (!empty($_POST['caract'])) {
            // On compte le nb de caractère avec strlen()
        echo '\''.$_POST['caract'].'\''.' contient '.strlen($_POST['caract']).' caractères (espace(s) compris).';
    }
    ?>
</body>
</html>