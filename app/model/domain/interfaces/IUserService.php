<?php

/**
 *
 * @author Daniel
 */

namespace fanap\login\app\model\domain\interfaces;

interface IUserService {

    function BuscarPorLogin($login);
    
    function Registrar($login, $senha, $tipo, $nome);
    
    function Autenticar($login, $senha);
            
    function AlterarSenha($login, $senhaAtual, $novaSenha, $confirmacao);

    function AlterarNome($login, $novoNome);
    
    function AlterarNivelDeAcesso($idUser, $tipoAcesso);
    
    function BuscarTodos();
    
    function BuscarPendentes();
    
}
