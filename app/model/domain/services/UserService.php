<?php
/**
 * Description of UserService
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\services;

require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
use \fanap\login\app\model\domain\interfaces\IUserService;
use \fanap\login\app\model\domain\entidades\User;
use \fanap\login\app\model\domain\repository\UserRepository;

AutoLoad::Register();

class UserService implements IUserService{
    
    public function AlterarNome($login, $novoNome) {
        $user = $this->BuscarPorLogin($login);
        $user->AlterarNome($novoNome);
        $user->ValidacoesImpeditivas();
        
        return UserRepository::Modificar($user);
    }

    public function AlterarSenha($login, $senhaAtual, $novaSenha, $confirmacao) {
        $user = $this->BuscarPorLogin($login);
        $user->AlterarSenha($senhaAtual, $novaSenha, $confirmacao);
        
        return UserRepository::Modificar($user);
    }

    public function Autenticar($login, $senha) {
        $user = UserRepository::BuscarPorLogin($login);
        
        if(!$user){
            throw new Exception("Usuário não encontrado");
        }
        
        if($user->getSenha() != $senha){
            throw new Exception("Senha inválida");
        }
        
        return $user;
        
    }

    public function BuscarPorLogin($login) {
        return UserRepository::BuscarPorLogin($login);
    }
    
    public function BuscarPorId($id){
        return UserRepository::BuscarPorId($id);
    }

    public function Registrar($login, $senha, $tipo, $nome) {
        try {
            $user = new User($login, $senha, $tipo, $nome);
        $user->ValidacoesImpeditivas();
        
        return UserRepository::Inserir($user);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        }

}