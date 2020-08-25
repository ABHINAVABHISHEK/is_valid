<?php

LIB_HANDLER::addLib("IS_VALID_HANDLER");
IS_VALID_HANDLER::addValidator("is_country_code");
     function is_phone($num , $legth = 10 , $code = "+91") {
        $status = 0;
        if (strlen($num) == $legth and is_numeric($num)){
            $status = 1;
        } 
        return $status;
        }
?>