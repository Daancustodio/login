<?php
/**
 * Description of AcessService
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\services;

require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();
use fanap\login\app\model\domain\interfaces\IAccessService;
use fanap\login\app\model\domain\entidades\User;
use fanap\login\app\model\domain\entidades\Access;
use fanap\login\app\model\domain\repository\AccessRepository;



class AcessService implements IAccessService{
    
  
    public function LogIn(User $user) {
        $acess = new Access($user);
        $acess->LogIn();
        return AccessRepository::Inserir($acess);
    }

    public function LogOut(User $user) {
        $acess = new Access($user);
        $acess->LogOut();
        return AccessRepository::Inserir($acess);
    }

//put your code here
}
