<?php
    function  conectar()
    {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "matricula";

        $con = new mysqli($servidor, $usuario, $senha, $banco);
        return $con;
    }
?>