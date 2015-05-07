<?php
/**
 *
 * @author Daniel
 */

namespace fanap\login\app\model\domain\interfaces;
require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
use fanap\login\app\model\domain\entidades\User;

AutoLoad::Register();

interface IAccessService {
    function LogIn(User $user);
    function LogOut(User $user);
}
