<?php

/**
 * Description of UserRepository
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\interfaces\UserRepository;

class UserRepository implements IUserRepository {

    public function BuscarPorId($id) {
        
    }

    public function BuscarTodos() {
        
    }

    public function Inserir(IUser $user) {
        $con = Connection::ObtenhaConexao();
        $stmt = $con->prepare("INSERT INTO user (nome, login, senha, tipo)VALUES (:nome,:login,:senha, :tipo)");

        $stmt->bind_param(array("nome" => $user->getNome(),
            "login" => $user->getLogin(),
            "senha" => $user->getSenha(),
            "tipo" => $user->getTipo()));


        $stmt->execute();

        $stmt->close();
    }

    public function Remover(IUser $user) {
        
    }

}
