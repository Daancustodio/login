<?php
/**
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\interfaces;
use \fanap\login\app\model\domain\entidades\User;

interface IUserRepository {
    static function BuscarPorId($id);
    static function Inserir(User $user);
    static function Remover(User $user);
    static function Modificar(User $user);
    static function BuscarTodos();
}
