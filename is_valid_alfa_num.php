<?php

function is_valid_alfa_num($str , $exception = "" , $case = "i" , $start_with = "") {
    if(strlen($str) > 0){
        $str_with = ($start_with == "alfa" ? "A-Z" : ($start_with == "num" ? "0-9" : ""));
        $str2 = "/^[$str_with][A-Za-z0-9$exception]/$case";
        $strs = preg_match($str2, $str) ? true : false;
        return $strs;
    }else{
        return false;
    }
}

?>