<?php

   function is_valid_json($json) {
    $js = json_decode($json , true);
    if($js) {
     return $js;
    }else{
     return false;
    }
   }

?>