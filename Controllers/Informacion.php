<?php
    class Informacion extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home(){
            $this->views->getView($this, "Home");
        }
    }
?>