<?php

 function is_country_code() {

        //$lib = require_once $_SERVER['DOCUMENT_ROOT']."/lib_handler/handler.php";

        $file = file_get_contents(API_DIR."/database/country/country.json");


        $fdata  = json_decode($file);


    }

?>