<?php
/**
 * Description of Access
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\entidades;

require_once dirname(__FILE__) . '/../../../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();

use \fanap\login\app\model\domain\interfaces\IUser;
use \fanap\login\app\model\domain\common\LoginTypeEnum;

class Access {

    private $id = null;
    private $tipo = null;
    private $data = null;
    private $user = null;    
            
    function __construct(User $user) {
        $this->user = $user;
    }
    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getData() {
        return $this->data;
    }

    function getUser() {
        return $this->user;
    }

    public function LogIn() {        
        $this->tipo = LoginTypeEnum::LogIn;   
        $this->CreateSession();
    }

    public function LogOut() {
        $this->tipo = LoginTypeEnum::LogOut;
        $this->DestroiSession();
    }
    
    private function CreateSession(){
        ob_start();
        session_start();
        $_SESSION['user'] = $this->user;  
                
    }
    
    private function DestroiSession(){
        unset($_SESSION['user']);        
    }

}
