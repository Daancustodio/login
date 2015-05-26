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
use fanap\login\app\model\domain\services\UserService;
var_dump(\get_included_files());
$user = new User("novo login","sss",1,"custodio");

$userService = new UserService();



$userRepository = new UserRepository();
var_dump($userRepository->BuscarTodos());
$userService->AlterarNivelDeAcesso(1, 3);
//$userRepository->Inserir($user);
var_dump($userRepository->BuscarTodos());

//$userRepository->Inserir($user);
