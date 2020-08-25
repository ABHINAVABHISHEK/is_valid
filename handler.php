<?php

class IS_VALID_HANDLER {


    public final function  addValidator($fname) {

       return  require_once(API_DIR."/is_valid/$fname.php");

    }
    
}

?>