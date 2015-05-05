<?php

/**
 * Description of User
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\models;

class User {

    private $id = null;
    private $login = null;
    private $senha = null;
    private $tipo = null;
    private $nome = null;
    
    function __construct($login, $senha, $tipo, $nome) {
        $this->login = $login;
        $this->senha = $senha;
        $this->tipo = $tipo;
        $this->nome = $nome;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getTipo() {
        return $this->tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function AlterarNome($novoNome) {
        Validacao::TamanhoMinimo($novoNome, 3, "O nome");        
        $this->nome = $novoNome;
    }
    
    public function ValidacoesImpeditivas() {
        Validacao::TamanhoMinimo($this->login, 3, "O login");   
        Validacao::TamanhoMinimo($this->nome, 3, "O nome");
        Validacao::TamanhoMinimo($this->senha, 6, "A senha");      
    }

    public function AlterarSenha($senhaAtual, $novaSenha, $confirmacao) {
        Validacao::TamanhoMinimo($senhaAtual, 6, "A senha atual");
        Validacao::TamanhoMinimo($novaSenha, 6, "A nova senha");
        Validacao::TamanhoMinimo($confirmacao, 6, "A confirmação");
        
        if (!$this->senha != $senhaAtual) {
            throw new Exception("A senha informada não confere com a atual");
        }
        if ($novaSenha != $confirmacao) {
            throw new Exception("A nova senha não confere com a confirmação");
        }

        $this->senha = $novaSenha;    
    }

}
