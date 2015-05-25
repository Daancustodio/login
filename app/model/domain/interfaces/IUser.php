<?php

/**
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\interfaces;

interface IUser {
    function AlterarSenha($senhaAtual,$novaSenha,$confirmacao);
    function AlterarNome($novoNome);
}
