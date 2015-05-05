<?php
/**
 * Description of TestUser
 *
 * @author Daniel
 */
namespace fanap\login\app\testes\TestUser;
//var_dump(dirname(__FILE__));
require_once dirname(__FILE__) . '/../../AutoLoader.php';


//$pah = 'c:/wamp/www/login/app/model/domain/models/User.php';
//var_dump(file_exists($pah));
//var_dump(include ($pah));
var_dump(\get_included_files());
use fanap\login\app\model\domain\models\User;
$user = new User("login","senhaa",1,"Nome Sobrenome");
//$userRepository = new UserRepository();

//$userRepository->Inserir($user);
