<?php
spl_autoload_register(function(string $classname) {
    $path = preg_replace_callback('!^(.*)?\\\([^\\\]+)\\\([A-Za-z0-9_]+)$!',function(array $matches): string {
        if(stripos($matches[1],'Generic') === 0) {
            $path = "";
            $path .=
                strtolower(str_replace('\\',DIRECTORY_SEPARATOR,$matches[1])) . DIRECTORY_SEPARATOR .
                strtolower(str_replace('\\',DIRECTORY_SEPARATOR,$matches[2])) . DIRECTORY_SEPARATOR .
                $matches[3];
        } else {
            $path = "vendors".DIRECTORY_SEPARATOR;
            $path .=
                strtolower(str_replace('\\',DIRECTORY_SEPARATOR,$matches[2])) . DIRECTORY_SEPARATOR .
                strtolower(str_replace('\\',DIRECTORY_SEPARATOR,$matches[1])) . DIRECTORY_SEPARATOR .
                $matches[3];
        }

        return $path;
	},$classname);


	include_once(__DIR__.DIRECTORY_SEPARATOR.$path.".php");
});

$Obj1 = new \Models\Google\Model();
var_dump($Obj1);

$Obj2 = new \Models\Twitter\Model();
var_dump($Obj2);

$Obj1 = new \Services\Twitter\Service();
var_dump($Obj1);

$Obj2 = new \Services\Google\Service();
var_dump($Obj2);

$Obj1 = new \Drivers\Api\Google\Api();
var_dump($Obj1);
