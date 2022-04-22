<?php
  class depto_empleadoModel{
      
    private $connection;

      public function __construct(){
        $this->connection = new Connection();
        $this->cursor = $this->connection->getConnection();
      }

      public function getFullData(){
        $sql = "SELECT * FROM depto_empleado limit 1000;";
        $execute = $this->cursor->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
      }
  }
?>