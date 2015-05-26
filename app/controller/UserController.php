<?php

/**
 * Description of CadastroController
 *
 * @author Daniel
 */

namespace fanap\login\app\controller;

require_once dirname(__FILE__) . '/../../AutoLoader.php';
use fanap\login\AutoLoad;
use fanap\login\app\model\domain\services\UserService;

AutoLoad::Register();
use Exception;

function AlterarTipo() {
    if(!isset($_GET['action']) || !isset($_GET['id'])){
        return;
    }
    
    try {

        $us = new UserService();
        $action = $_GET['action'];
        $userId = $_GET['id'];

        if ($action == 'aprovar') {            
            $us->AlterarNivelDeAcesso($userId, 1);
        }elseif ($action == 'aprovarGerente') {
            $us->AlterarNivelDeAcesso($userId, 2);
        }  elseif ($action == 'aprovarAdm') {
            $us->AlterarNivelDeAcesso($userId, 3);
        }
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
}
 
/*
para chamada ajax
 * 
 */
function AlterarTipoAjax($action, $userId) {
   
    try {

        $us = new UserService();
        
        if ($action == 'aprovar') {
            $us->AlterarNivelDeAcesso($userId, 1);
        }elseif ($action == 'aprovarGerente') {
            $us->AlterarNivelDeAcesso($userId, 2);
        }  elseif ($action == 'aprovarAdm') {
            $us->AlterarNivelDeAcesso($userId, 3);
        }
        
        return true;
        
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
}
   


