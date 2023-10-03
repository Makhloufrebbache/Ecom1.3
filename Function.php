<?php
function namelengthIsValid($nametovalid){
    // nombre de caractère
    $length=strlen($nametovalid);
    if ($length < 2){

        $response=['isvalid'=>true,'msg'=>''];

    }
    elseif ($length < 2){
        $response=['isvalid'=>false,'msg'=>'Non trop court'];
    }
        elseif ($length < 10){
        $response=['isvalid'=>false,'msg'=>'Non trop long'];
    }

 return $response;
}
?>