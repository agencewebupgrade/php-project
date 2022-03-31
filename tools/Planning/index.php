<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
</head>

<body>
    <?php
    include 'date.php';
    $date = getAll(2039);
    // echo "<pre>";
    // print_r($date);
    // echo "</pre>";


    //créer un tableau avec tr pour les mois et td pour les jours et th pour les entêtes de tableaux
    ?>

    <?php
    $day = array(
        'lundi ',
        'mardi ',
        'mercredi ',
        'jeudi ',
        'vendredi ',
        'samedi ',
        'dimanche ',

    );
    $month = array(
        'janvier',
        'février',
        'mars',
        'avril',
        'mai',
        'juin',
        'juillet',
        'aout',
        'septembre',
        'octobre',
        'novembre',
        'decembre',
    );

    echo "<table style='border-collapse: collapse'>";
    foreach ($date as $key => $value) {

        // echo  ' Année : ' . $key;
        foreach ($value as $key2 => $value2) {
            echo "<tr>";
            // echo ' mois : ' . $key2;
            foreach ($value2 as $key3 => $value3) {
                echo '<td style="border:1px solid black; ">' . $value3 . '</td>';
            }
            echo "</tr>";
        }
    }
    echo "</table>";


    ?>
    <table>

        <tr>
            <th>Jours</th>
            <td>Janvier</td>
            <td>Janvier</td>
            <td>Janvier</td>
            <td>Janvier</td>

        </tr>
        <tr>
            <td>Lundi</td>
        </tr>
        <tr>
            <td>Mardi</td>
        </tr>
        <tr>
            <td>Mercredi</td>
        </tr>
        <tr>
            <td>Jeudi</td>
        </tr>
        <tr>
            <td>Vendredi</td>
        </tr>
        <tr>
            <td>Samedi</td>
        </tr>
        <tr>
            <td>Dimanche</td>
        </tr>

    </table>




</body>

</html>