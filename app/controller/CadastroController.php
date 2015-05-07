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

class CadastroController {

    function Cadastrar() {

        try {
            $us = new UserService();
            $foiCadastrado = $us->Registrar($_POST['login'], $_POST['senha'], 0, $_POST['nome']);

            if ($foiCadastrado) {
                echo 'Cadastro realizado!';
            }
        } catch (Exception $exc) {
            echo 'capturei';
            echo $exc->getMessage();
        }
    }

}
