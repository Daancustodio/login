<?php


/**
 * Description of Connection
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\repository;
use \mysqli;

class Connection {

    private static $server = 'dd4e8bb8-6420-4df6-9006-aa1f018470b1.mysql.sequelizer.com';
    private static $user = 'ijikuhrjckqyjbuu';
    private static $pass = 'eoVisiBxNRtfX28fPdw74tTrXNvikWHHtFW2Na4k36Se6JHkyHrtPX2TCDtLUtnY';
    private static $db = 'dbdd4e8bb864204df69006aa1f018470b1';
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



