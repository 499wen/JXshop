<?php
    namespace models;

    class Base {

        private static $pdo = null;
        private function __clone (){}
        private function __construct (){

            if(self::pdo === null ){
                self::$pdo = new \PDO("mysql:host=localhost;dbname=JXshop","root","");
                self::$pdo->exec("set names utf8");
            }

            return self::$pdo;
        }

        public static function sql (){

            return new self;
        }

    }