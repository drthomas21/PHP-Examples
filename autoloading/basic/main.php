<?php
spl_autoload_register(function($classname) {
    include_once("{$classname}.php");
});

$Obj = new Foo();
var_dump($Obj);

$Obj = new Bar();
var_dump($Obj);
