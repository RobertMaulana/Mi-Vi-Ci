<?php

function AutoLoad($files){
    require '../Configuration/'. $files .'.php';
}

spl_autoload_register('AutoLoad');


?>