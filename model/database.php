<?php 

    class Database {
        private static $dsn = 'mysql:host=hwr4wkxs079mtb19.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=vifmi5ekcwb44w9l';
        private static $username = 'm2hdc19rf2wturb7';
        private static $password = 'rkxk5ubohcqjuvfz';
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