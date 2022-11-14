<?php

    class CiudadController {
        
        public function __construct() {
            // aquí se instancia el modelo
        }

        public function index() {

            // traer la vista del index
            require_once 'view/ciudad/index_ciudad.php';

        }

    }