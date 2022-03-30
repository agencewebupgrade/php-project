<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form >
           
    <input type="text" name="choosedNumber" placeholder="nombre a inverssé" require/><br>
    <input type="submit" />

</form>

<?php
    if (!empty(intval($_GET["choosedNumber"]))){
        if($_GET["choosedNumber"]<0){
            $getPositivNumber = $_GET['choosedNumber'] - $_GET['choosedNumber']* 2;
           echo intval($getPositivNumber);
        }else{
            echo intval($_GET['choosedNumber'] - $_GET['choosedNumber']* 2);
        }
    }else {
        echo ('la donné est incorrect ou n\'est pas un nombre');
    }
?>
</body>
</html>