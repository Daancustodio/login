<?php
/**
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\interfaces\IUserRepository;

interface IUserRepository {
    function BuscarPorId($id);
    function Inserir(IUser $user);
    function Remover(IUser $user);
    function BuscarTodos();
}
