<?php
use TheSeer\Tokenizer\Exception;
class calcul{


function addiction($a, $b)
{
        $add = $a+$b;
        return $add;
}
function soustration ($a , $b){
    $sous = $a-$b;
    return $sous;

}

function multiplication ($a , $b){
    $multi = $a*$b;
    return $multi;
}


function division ($a, $b){
    $div = $a/$b;
    if( $b == 0){
        throw new Exception ("incorrect");
    }
    return $div;

}

}

?>