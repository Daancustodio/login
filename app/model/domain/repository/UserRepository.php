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
use fanap\login\app\model\domain\entidades\User;
use Exception;

class UserRepository implements IUserRepository {

    public static function BuscarPorId($id) {
         $sql = 'select * from user where id = ' . $id . ' LIMIT 1';
        
        $user = Connection::ObtenhaConexao()->Query($sql)->fetch_object();
        
        if(!$user){
            return false;
        } 
        
        return new User($user->login, $user->senha, $user->tipo, $user->nome, $user->id);
        
    }
    
    public static function BuscarPorLogin($login) {
        $sql = "select * from user where login = '" . $login . "' LIMIT 1";
                
        $user = Connection::ObtenhaConexao()->Query($sql)->fetch_object();
        
        if(!$user){
            return false;
        } 
        
        return new User($user->login, $user->senha, $user->tipo, $user->nome, $user->id);
    }

    public static function BuscarTodos() {
        return Connection::ObtenhaConexao()->Query('select * from user')->fetch_all(MYSQLI_ASSOC);
    }
    
    public static function BuscarPendentes() {
        return Connection::ObtenhaConexao()->Query('select * from user where tipo = 0')->fetch_all(MYSQLI_ASSOC);
    }

    public static function Inserir(User $user) {
        $con = Connection::ObtenhaConexao();
        
        $query = "INSERT INTO user (nome, login, senha, tipo) VALUES ('" . $user->getNome() . "','" . $user->getLogin() . "','" . $user->getSenha() . "'," . $user->getTipo() . ")";
                
        return $con->Query($query);        
    }

    public static function Remover(User $user) {
        $result = Connection::ObtenhaConexao()->Query('DELETE from user where id = ' . $user->getId());
        
        if(!$result){
            Connection::ObtenhaConexao()->Query('DELETE from user where login = ' . $user->getLogin());
        }
        
        return $result;
    }

    public static function Modificar(User $user) {
        $nome = $user->getNome();
        $tipo = $user->getTipo();
        $senha = $user->getSenha();
        
        $sql = "UPDATE `user` SET `tipo`= $tipo, senha = `nome`= '$nome' WHERE id = " . $user->getId();
        
        return Connection::ObtenhaConexao()->Query($sql);        
    }

}
