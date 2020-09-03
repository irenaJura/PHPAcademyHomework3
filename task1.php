<?php

function reverseStr($str){
    $length = strlen($str);
    for($i=$length-1;$i>=0;$i--){
        echo $str[$i];
    }
}

reverseStr("irena");