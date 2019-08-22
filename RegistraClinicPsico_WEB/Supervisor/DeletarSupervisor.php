<?php 

if(isset($_GET['deletar'])){
    
    require '../Banco/conexao.php';
    require_once 'Supervisor.php';

$idSupervisor = addslashes($_GET['deletar']);

$Supervisor = new Supervisor();

$Supervisor->setIdSupervisor($idSupervisor);

$banco = new Banco("localhost","psico","root","");

    try{
    
        $banco->delete("supervisor", array("IDSUPERVISOR" => $idSupervisor));                

	echo "<script>alert('DELETADO COM SUCESSO!!');window.location = '../telas/TelaPesquisaSupervisor.php';</script>";
    }
    catch (Exception $e) {
        echo "<script>alert('ERRO AO DELETAR SUPERVISOR!!')</script>";

    }
}