<?php
  class jefe_departamentoModel{
      
    private $connection;

      public function __construct(){
        $this->connection = new Connection();
        $this->cursor = $this->connection->getConnection();
      }

      public function getFullData(){
        $sql = "SELECT * FROM jefe_departamento where to_date is null order by emp_no limit 1000;";
        $execute = $this->cursor->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
      }
  }
?>