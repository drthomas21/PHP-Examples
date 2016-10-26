<?php
spl_autoload_register(function(string $classname) {
    $path = preg_replace_callback('!^(.*)?\\\([A-Za-z0-9_]+)$!',function(array $matches): string {
		return strtolower(str_replace('\\',DIRECTORY_SEPARATOR,$matches[1])).DIRECTORY_SEPARATOR.$matches[2];
	},$classname);


	include_once(__DIR__.DIRECTORY_SEPARATOR.$path.".php");
});

class Bar {

}

$Bar = new Bar();
var_dump($Bar);

$Bar = new \Foo\Bar();
var_dump($Bar);

$MySql = new \Drivers\Databases\Mysql\DatabaseDriver();
var_dump($MySql);

$Pdo = new \Drivers\Databases\Pdo\DatabaseDriver();
var_dump($Pdo);

//Some simple cheats
use \Foo\Bar as FooBar;
$Bar = new FooBar();
var_dump($Bar);
