<?php
/**
 * Description of AccessRepository
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\repository;

require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();

use fanap\login\app\model\domain\interfaces\IAccessRepository;
use fanap\login\app\model\domain\entidades\Access;
use fanap\login\app\model\domain\repository\Connection;

class AccessRepository implements IAccessRepository{
   

    public static function Inserir(Access $acess) {
        $tipo = $acess->getTipo();
        $user = $acess->getUser()->getId();
        $sql = "INSERT INTO `access`(`tipo`, `data`, `user`) VALUES ($tipo,now(),$user)";
        return Connection::Query($sql);
    }

}
