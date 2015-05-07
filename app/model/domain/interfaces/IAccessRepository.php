<?php

/**
 *
 * @author Daniel
 */

namespace fanap\login\app\model\domain\interfaces;

require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();

use fanap\login\app\model\domain\entidades\Access;

interface IAccessRepository {

    static function Inserir(Access $acess);
}
