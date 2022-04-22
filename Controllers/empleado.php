<?php
    class Empleado extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home(){
            $data['data'] = $this->model->getFullData();
            $this->views->getView($this, "Home", $data);
        }
    }
?>