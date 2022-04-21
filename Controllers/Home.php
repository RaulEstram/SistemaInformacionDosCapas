<?php
    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home(){
            $data['modelo_info'] = $this->model->getCarrito();
            $this->views->getView($this, "Home", $data);
        }
    }
?>