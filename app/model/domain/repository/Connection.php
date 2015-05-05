<?php


/**
 * Description of Connection
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\repository\Connection;
class Connection {

    private static $server = 'localhost';
    private static $user = 'root';
    private static $pass = '';
    private static $db = 'login';
    private static $con;

    private function __construct() {
        
    }

    public static function ObtenhaConexao() {
        if (!self::$con) {
            self::$con = new mysqli(self::$server, self::$user, self::$pass, self::$db);

            if (self::$con->connect_errno) {
                printf("Connect failed: %s\n", msqli_connect_error());
                exit();
            }
        }
        return self::$con;
    }

    public static function Query($SqlQuery) {
        return self::ObtenhaConexao()->query($SqlQuery);
        //var_dump($result->fetch_all());
    }

}

Connection::Query("Select * from user");

