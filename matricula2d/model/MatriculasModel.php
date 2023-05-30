<?php
    include_once 'database.php';

    function listar()
    {
        $con = conectar();
        $sql = "SELECT * FROM dados";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc())
        {
            $dados[] = $d;
        }
        return $dados;
    }
    function inserir($nome,$nomeResp,$idade,$email,$nis,$rg)
    {
        $con = conectar();
        $sql = "INSERT INTO dados (nome,nomeResp,idade,email,nis,rg) VALUES('$nome','$nomeResp','$idade','$email','$nis','$rg')";
        $con->query($sql);
        
    }

    function buscar($id)
    {
        $con = conectar();
        $sql = "SELECT * FROM dados WHERE id='$id'";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc())
        {
            $dados[] = $d;
        }
        return $dados[0];
    }

    function atualizar($id,$nome,$nomeResp,$idade,$email,$nis,$rg)
    {
        $con = conectar();
        $sql = "UPDATE dados SET nome='$nome', nomeResp='$nomeResp',idade='$idade',email='$email', nis='$nis', rg= '$rg' WHERE id='$id'";
        $con->query($sql);
    }

    function excluir($id)
    {
        $con = conectar();
        $sql = "DELETE FROM dados WHERE id='$id'";
        $con->query($sql);
    }
?>