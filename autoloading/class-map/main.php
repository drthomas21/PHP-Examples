<?php
$arrMap = array(
    "Foo" => "/includes/Foo.php",
    "Bar" => "/includes/Bar.inc"
);

spl_autoload_register(function($classname) use ($arrMap){
    if(array_key_exists($classname,$arrMap)) {
        include_once(__DIR__.$arrMap[$classname]);
    }
});

$Obj = new Foo();
var_dump($Obj);

$Obj = new Bar();
var_dump($Obj);
