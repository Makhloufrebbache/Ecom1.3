<?php
require_once("Function.php");

 if($_POST){
    $name= $_POST["fname"];

    if(empty($name)){
        echo "</br> nom vide";

    }else {
                echo "</br>Mon nom est" . $name;
    }
$nameLengthIsValid = namelengthIsValid($_POST['fname']);
echo '</br>';
var_dump($nameLengthIsValid);

if (!namelengthIsValid('isValid')){
//On fait le traitement

}

 }
?>