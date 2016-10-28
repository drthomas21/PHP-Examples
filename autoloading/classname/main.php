<?php
spl_autoload_register(function($classname) {
    $path = strtolower(str_replace("_",DIRECTORY_SEPARATOR,$classname));
    include_once(__DIR__.DIRECTORY_SEPARATOR.$path.".php");
});

$Obj = new Foo_Bar();
var_dump($Obj);
