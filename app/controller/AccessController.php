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
use fanap\login\app\model\domain\services\AcessService;

AutoLoad::Register();
use Exception;
class AccessController {

    function Cadastrar() {

        try {
            $us = new UserService();
            $foiCadastrado = $us->Registrar($_POST['login'], $_POST['senha'], 0, $_POST['nome']);

            if ($foiCadastrado) {
                echo 'Cadastro realizado!';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    function Acessar() {
        try {
            $us = new UserService();
            $user = $us->Autenticar($_POST['login'], $_POST['senha']);

            if ($user) {
                $acess = new AcessService();
                $acess->LogIn($user);
                header('Location: ../view/logado.php');    
                
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
            
    }

}
