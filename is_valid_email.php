
<?php

LIB_HANDLER::addLib("IS_VALID_HANDLER");
IS_VALID_HANDLER::addValidator("is_valid_alfa_num");

function is_valid_email($email) {
$dm = array("com" , "net" , "io" , "in" , "co");
$e1 = explode("." , $email);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  return false;
}else {
    if ($e1 && in_array($e1[1] , $dm)) {
        $e2 = explode("@" , $e1[0]);
        if (isset($e2[0]) && isset($e2[1])) {
            if(is_valid_alfa_num($e2[0])){
                return true;
            }else {
                return false;
            }
        } else {
            return false;
        }
    }else{
        return false;
    }
}
return false;
}

?>