<?php 

    class Database {
        private static $dsn = 'mysql:host=grp6m5lz95d9exiz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=jg23pfxi0twrqd5x';
        private static $username = 'msc7048torg6an2y';
        private static $password = 'sv166613twfsig31';
        private static $db;

        private function __construct() {}

        public static function getDB() {
            if(!isset(self::$db)) {
                try {
                    self::$db = new PDO(self::$dsn, self::$username, self::$password);
                } catch(PDOException $e) {
                    echo $e->getMessage();
                }
            }
            return self::$db;
        }
    }