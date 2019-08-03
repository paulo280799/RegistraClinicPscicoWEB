<?php 

if(isset($_GET['deletar'])){
    
    require '../Banco/conexao.php';
    require_once 'Aluno.php';

$idAluno = addslashes($_GET['deletar']);

$Aluno = new Aluno();

$Aluno->setIDAluno($idAluno);

$banco = new Banco("localhost","psico","root","");

    try{
    
        $banco->delete("aluno", array("IDALUNO" => $idAluno));                

	echo "<script>alert('DELETADO COM SUCESSO!!');window.location = '../telas/TelaPesquisaAluno.php';</script>";
    }
    catch (Exception $e) {
        echo "<script>alert('ERRO AO DELETAR USUÁRIO!!')</script>";

    }
}