<?php

/**
 * Description of UserRepository
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\repository;

require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();

use fanap\login\app\model\domain\interfaces\IUserRepository;
use fanap\login\app\model\domain\interfaces\IUser;

class UserRepository implements IUserRepository {

    public function BuscarPorId($id) {
        
    }

    public function BuscarTodos() {
        return Connection::Query('select * from user')->fetch_all();
    }

    public function Inserir(IUser $user) {
        $con = Connection::ObtenhaConexao();
        
        $query = "INSERT INTO user (nome, login, senha, tipo) VALUES ('" . $user->getNome() . "','" . $user->getLogin() . "','" . $user->getSenha() . "'," . $user->getTipo() . ")";
        
        var_dump($query);
        return $con->Query($query);        
    }

    public function Remover(IUser $user) {
        
    }

}
