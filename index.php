<?php

    require_once "modelo/claseCliente.php";
    require_once "modelo/claseProducto.php";
    require_once "modelo/claseMarca.php";
    require_once "modelo/claseProveedor.php";

    #Instanciar clase Cliente
    $c_cliente = new Cliente();
    $c_cliente -> Id = 1;
    $c_cliente -> Nombre = 'Bob';
    $c_cliente -> Apellido = 'Esponja';
    $c_cliente -> NroDoc = 'xx-xxx-xxx';
    $c_cliente -> MostrarDatos();

    #Instanciar clase Marca
    $Marca = new Marca();
    $Marca -> Id = 1;
    $Marca -> Description = 'merenguitas';
    $Marca -> Codigo = 'FA98545';

    #Instanciar Producto
    $prod = new producto();
    $prod -> Id = 1;
    $prod -> Codigo = '564FA001';
    $prod -> Description = 'galletitas';
    $prod -> Marca = $Marca;

    #Instanciar clase Proveedor
    $c_prov = new Proveedor();
    $c_prov -> Id = 2;
    $c_prov -> Nombre = 'Homero';
    $c_prov -> Apellido = 'Simpson';
    $c_prov -> NroDoc = 123456789;
    $c_prov -> Producto = $prod;
    $c_prov -> MostrarProv();
?>