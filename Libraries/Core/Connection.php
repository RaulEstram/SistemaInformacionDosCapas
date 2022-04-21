<?php
    class Connection{
        private $host = "127.0.0.1";
        private $user = "root";
        private $password = "admin";
        private $db = "empleados";
        private $connection;

        public function __construct(){
            $connection = 'mysql:host='.$this->host.';dbname='.$this->db;
            try {
                $this->connection = new PDO($connection, $this->user, $this->password); # https://www.php.net/manual/es/ref.pdo-mysql.php
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # https://www.php.net/manual/es/pdo.setattribute.php
            } catch (Exception $e) {
                $this->connection = 'Error de conexion';
            }
        }

        public function getConnection()
        {
            return $this->connection;
        }

    }

?>