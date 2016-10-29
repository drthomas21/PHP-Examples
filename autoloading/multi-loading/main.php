<?php
namespace Foo {
    spl_autoload_register(function($classname) {
        if(stripos($classname,__NAMESPACE__) !== false) {
            $parts = explode("\\",$classname);
            $class = array_pop($parts);
            include_once(__DIR__.'/includes-foo/'.$class.".php");
        }
    });
}

namespace Bar {
    spl_autoload_register(function($classname) {
        if(stripos($classname,__NAMESPACE__) !== false) {
            $parts = explode("\\",$classname);
            $class = array_pop($parts);
            include_once(__DIR__.'/includes-bar/'.$class.".php");
        }
    });
}

namespace Main {
    $Obj = new \Foo\Foo();
    var_dump($Obj);

    $Obj = new \Bar\Foo();
    var_dump($Obj);
}
