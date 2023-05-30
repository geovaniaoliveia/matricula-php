<?php
    include_once "../model/MatriculasModel.php";

    if(isset($_POST['cadastrar']))
    {
        adicionar();
        header('Location: MatriculasController.php');
    }
    else if (isset($_POST['atualiza'])) 
    {
        editar();
        header('Location: MatriculasController.php');
    }
    else if (isset($_POST['exclui']))
    {
        $contato= buscar($_POST['id']);
        include_once("../view/excluir.php");
    }
    else if(isset($_GET['sim']))
    {
        $id = $_GET['sim'];
        excluir($id);
        header('Location: MatriculasController.php');
    }
    else if(isset($_GET['id']))
    {
        $contato = buscar($_GET['id']);
        include_once "../view/alteracoesMatricula.php";
    }
    else
    {
        index();
    }
    function adicionar()
    {
        $nome = $_POST['nome'];
        $nomeResp = $_POST['nomeResp'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $nis = $_POST['nis'];
        $rg = $_POST['rg'];
        inserir($nome,$nomeResp,$idade,$email,$nis,$rg);
    }

    function editar()
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $nomeResp = $_POST['nomeResp'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $nis = $_POST['nis'];
        $rg = $_POST['rg'];
        atualizar($id, $nome,$nomeResp,$idade,$email,$nis,$rg);
    }
    
    function index()
    {
        $listaContatos = listar();
        include_once "../view/cadastrarMatricula.php";
    }
?>