<?php

namespace fanap\login\app\view;

require_once dirname(__FILE__) . '/../../AutoLoader.php';
require_once dirname(__FILE__) . '/../controller/UserController.php';
session_start();
use fanap\login\AutoLoad;
use fanap\login\app\model\domain\services\UserService;
AutoLoad::Register();


if (!$_SESSION['user']){
    header('Location: login.php');   
}
$session = unserialize($_SESSION['user']);

\fanap\login\app\controller\AlterarTipo();
CreateTable($session);

function CreateTable($session){
    $userService = new UserService();
    $users = $userService->BuscarPendentes();
    echo ViewAccess::GetHeader();
    if (count($users)){        
        echo ViewAccess::CriarTabelaAprovacoes($session, $users);
    }else{
        echo '<h1>Não existem cadastro pendentes de aprovação';
    }    
    echo ViewAccess::GetFooter();
   
}
   
   
   


