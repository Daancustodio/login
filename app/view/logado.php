<?php

namespace fanap\login\app\view;

require_once dirname(__FILE__) . '/../../AutoLoader.php';
session_start();
use fanap\login\AutoLoad;
use fanap\login\app\model\domain\entidades\User;
use fanap\login\app\model\domain\services\UserService;
AutoLoad::Register();
$session = unserialize($_SESSION['user']);

if (isset($session)){
    
    $userService = new UserService();
    $users = $userService->BuscarTodos();
    echo ViewAccess::GetHeader();
    echo ViewAccess::CriarTabelaAprovacoes($session, $users);
    echo ViewAccess::GetFooter();
}

?>
