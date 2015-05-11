<?php

namespace fanap\login\app\view;
session_start();
require_once dirname(__FILE__) . '/../../AutoLoader.php';

use fanap\login\AutoLoad;
use fanap\login\app\model\domain\entidades\User;
AutoLoad::Register();

var_dump($_SESSION['user']);
if (isset($_SESSION['user'])){
    
   $_SESSION['user']->getNome();
    
}

?>
