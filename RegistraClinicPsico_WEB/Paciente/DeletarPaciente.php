<?php 
if(isset($_GET['deletar'])){
    
    require '../Banco/conexao.php';
    require_once 'Paciente.php';
    
	$idPaciente = addslashes($_GET['deletar']);
	$Paciente = new Paciente();
	$Paciente->setIDPaciente($idPaciente);
	$banco = new Banco("localhost","psico","root","");

    try{
        $banco->delete("paciente", array("IDPACIENTE" => $idPaciente));                
		echo "<script>alert('DELETADO COM SUCESSO!!');window.location = '../telas/TelaPesquisaPaciente.php';</script>";
    }catch (Exception $e) {
        echo "<script>alert('ERRO AO DELETAR USUÁRIO!!')</script>";
    }
}