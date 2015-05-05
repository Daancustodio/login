<?php
/**
 * Description of TestUser
 *
 * @author Daniel
 */
namespace fanap\login\app\testes;
//var_dump(dirname(__FILE__));
require_once dirname(__FILE__) . '/../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();


//$pah = 'c:/wamp/www/login/app/model/domain/models/User.php';
//var_dump(file_exists($pah));
//var_dump(include ($pah));
use \fanap\login\app\model\domain\models\User;
use \fanap\login\app\model\domain\repository\UserRepository;
var_dump(\get_included_files());
$user = new User("novo login","sss",1,"custodio");

$userRepository = new UserRepository();

//$userRepository->Inserir($user);
var_dump($userRepository->BuscarTodos());

//$userRepository->Inserir($user);
