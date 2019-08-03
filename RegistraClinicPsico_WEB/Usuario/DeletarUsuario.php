<?php 

if(isset($_GET['deletar'])){
    
    require '../Banco/conexao.php';
    require_once 'Usuario.php';

$idUsuario = addslashes($_GET['deletar']);

$Usuario = new Usuario();

$Usuario->setIdUsuario($idUsuario);

$banco = new Banco("localhost","psico","root","");

    try{
    
        $banco->delete("usuario", array("idUsuario" => $idUsuario));                

	echo "<script>alert('DELETADO COM SUCESSO!!');window.location = '../telas/TelaPesquisaUsuario.php';</script>";
    }
    catch (Exception $e) {
        echo "<script>alert('ERRO AO DELETAR USUÁRIO!!')</script>";

    }
}