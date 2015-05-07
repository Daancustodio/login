<?php
namespace fanap\login\app\testes;
//var_dump(dirname(__FILE__));
require_once dirname(__FILE__) . '/../../AutoLoader.php';
use fanap\login\AutoLoad;
AutoLoad::Register();


//$pah = 'c:/wamp/www/login/app/model/domain/models/User.php';
//var_dump(file_exists($pah));
//var_dump(include ($pah));
use \fanap\login\app\model\domain\entidades\User;
use \fanap\login\app\model\domain\repository\UserRepository;
use fanap\login\app\model\domain\services\UserService;
use fanap\login\app\model\domain\repository\Connection;
use fanap\login\app\model\domain\entidades\Access;
use fanap\login\app\model\domain\services\AcessService;


$us = new UserService();
$user = $us->Autenticar('daniel', 'senhaaa');
$as = new AcessService();
$acess = $as->LogIn($user);

var_dump($_SESSION);
var_dump($_SESSION['user']->getTipo());


