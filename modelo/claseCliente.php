<?php

    class Cliente{

        public $Id;
        public $Nombre;
        public $Apellido;
        public $NroDoc;

        public function MostrarDatos(){

            echo '<hr>';
            echo '<--- Cliente ---> <br>';
            echo 'ID: ' . $this->Id . '<br>';
            echo 'Nombre: ' . $this->Nombre . '<br>';
            echo 'Apellido: ' . $this->Apellido . '<br>';
            echo 'Numero de Documento: ' . $this->NroDoc . '<br>';
            echo '<hr>';
        }


    }

?>