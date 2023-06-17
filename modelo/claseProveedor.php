<?php
    class Proveedor{
        public $Id;
        public $Nombre;
        public $Apellido;
        public $NroDoc;
        public $Producto;

        public function MostrarProv(){
            echo '<hr>';
            echo '<--- Proveedor ---> <br>';
            echo 'ID: ' . $this->Id . '<br>';
            echo 'Nombre: ' . $this->Nombre . '<br>';
            echo 'Apellido: ' . $this->Apellido . '<br>';
            echo 'Nro Documento: ' . $this->NroDoc . '<br>';

            echo '<hr>';
            echo '<--- Producto ---> <br>';
            echo 'ID: ' . $this->Producto->Id . '<br>';
            echo 'Codigo: ' . $this->Producto->Codigo . '<br>';
            echo 'Description: ' . $this->Producto->Description . '<br>';
            echo '<hr>';

            echo '<--- Marca ---> <br>';
            echo 'ID: ' . $this->Producto->Marca->Id . '<br>';
            echo 'Description: ' . $this->Producto->Marca->Description . '<br>';
            echo 'Codigo: ' . $this->Producto->Marca->Codigo . '<br>';
            echo '<hr>';
        
        
        
        }

    }
?>