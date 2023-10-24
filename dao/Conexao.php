<?php 
  class Conexao {
        static $host;
        static $user;
        static $banco;
        static $password;
        public static $instance;
        private function __construct(){
            $this->user="fairtek";
            $this->banco= "sintrasp_sind";
            $this->password="fairtek2018";
            $this->host="localhost";
        }
        public static function getInstance(){
            if(!isset(self::$instance)){
                self::$instance = new PDO('mysql:host=localhost;dbname=sintrasp_sind', 'fairtek','fairtek2018', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
                
            }
            return self::$instance;
        }

        
}
?>