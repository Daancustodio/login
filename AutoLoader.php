<?php

namespace fanap\login;

class AutoLoad{

public static function Register (){
    spl_autoload_register(function ($className) 
{
    $logicalPath = str_replace('\\', '/', $className);
    $fullPath = __DIR__ . substr($logicalPath,11) . '.php';
    $fullPath2 = '/' . $logicalPath . '.php';
    $fullPath = str_replace('\\', '/', $fullPath);
    //var_dump($fullPath); 
    //var_dump(__DIR__);
    //var_dump($fullPath2);       
    if (file_exists($fullPath)) {   
       include_once ($fullPath);
    }elseif (file_exists($fullPath2)) {
        include_once $fullPath2;
    }
});
}
}