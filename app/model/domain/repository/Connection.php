<?php


/**
 * Description of Connection
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\repository;
use \mysqli;

class Connection {

    private static $server = '2bb9ac6f-09ff-4ac2-b45a-a610012fa711.sqlserver.sequelizer.com';
    private static $user = 'zaopgjescqbcvkro';
    private static $pass = 'S3QJ7Ad7WACWWNe2nxQU5PGqM75FxwohEzHbXsfC6LWVZu3AJj3zP5Lduz58EEGy';
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



