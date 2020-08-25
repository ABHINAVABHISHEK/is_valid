<?php

function is_valid_string($string , $case = "i" , $exeptions = ""){
    if(strlen($string) > 0){
        return preg_match("/^[A-Z_|A-Z_$exeptions]+$/$case" , $string)? true : false;
    }else {
        return false;
    }
}

?>