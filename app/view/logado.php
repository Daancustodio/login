<?php

namespace fanap\login\app\view;

require_once dirname(__FILE__) . '/../../AutoLoader.php';
session_start();
use fanap\login\AutoLoad;
use fanap\login\app\model\domain\entidades\User;
AutoLoad::Register();
$session = unserialize($_SESSION['user']);

if (isset($session)){
    
   echo $session->getNome();
    
}

?>
