<?php


/**
 * Description of Connection
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\repository;
use \mysqli;

class Connection {

    private static $server = 'localhost';
    private static $user = 'root';
    private static $pass = '1234';
    private static $db = 'login';
    private static $con;

    private function __construct() {
        
    }

    public static function ObtenhaConexao() {
        if (!self::$con) {
            self::$con = new mysqli(self::$server, self::$user, self::$pass, self::$db);

            if (self::$con->connect_errno) {
                var_dump("Connect failed: %s\n", msqli_connect_error());
                exit();
            }
        }
        return self::$con;
    }

    public static function Query($SqlQuery) {
        self::ObtenhaConexao()->Query($SqlQuery);        
    }

}



