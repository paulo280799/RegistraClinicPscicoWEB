<?php

$idPaciente = 0;
$prontuario = "";
$dataCadastro = "";
$nomePaciente = "";
$dataNascimento = "";
$cpfPaciente = "";
$rgPaciente = "";
$sexoPaciente = "";
$telefonePaciente = "";
$telefoneOpcionalPaciente = "";
$estadoCivil = "";
$cidadePaciente = "" ;
$bairroPaciente = "";
$ruaPaciente = "";
$endereco = "";
$responsavel = "";
$situaçãoPaciente = "";
$tipoPaciente = "";
$queixaPricipal = "";
$disponibilidade = "";
$setorDeEncaminhamento = "";
$contrarreferencia = "";
$outros = "";

if (isset($_GET['editar'])) {
	require '../Banco/conexao.php';

	$idPaciente = $_GET['editar'];

	$banco = new Banco("localhost","psico","root","");

	$banco->query("SELECT * FROM paciente WHERE IDPACIENTE = $idPaciente ");

	foreach ($banco->result() as $resultado) {

		$idPaciente = $resultado['IDPACIENTE'];
		$prontuario = $resultado['PRONTUARIO'];
		$dataCadastro = $resultado['DATACADASTRO'];  
		$nomePaciente = $resultado['NOMEPACIENTE'];
		$dataNascimento = $resultado['DATANASCIMENTO'];
		$cpfPaciente = $resultado['CPFPACIENTE'];
		$rgPaciente = $resultado['RGPACIENTE'];
		$sexoPaciente = $resultado['SEXOPACIENTE'];
		$telefonePaciente = $resultado['TELEFONEPACIENTE'];
		$telefoneOpcionalPaciente = $resultado['TELEFONEOPCIONALPACIENTE'];
		$estadoCivil = $resultado['ESTADOCIVIL'];
		$cidadePaciente = $resultado['CIDADEPACIENTE'];
		$bairroPaciente = $resultado['BAIRROPACIENTE'];
		$ruaPaciente = $resultado['RUAPACIENTE'];
		$endereco = $resultado['ENDERECO'];
		$responsavel = $resultado['RESPONSAVEL'];
		$situaçãoPaciente = $resultado['SITUACAOPACIENTE'];
		$tipoPaciente = $resultado['TIPOPACIENTE'];
		$queixaPricipal = $resultado['QUEIXAPRINCIPAL'];
		$disponibilidade = $resultado['DISPONIBILIDADE'];
		$setorDeEncaminhamento = $resultado['SETORDEENCAMINHAMENTO'];
		$contrarreferencia = $resultado['CONTRARREFERENCIA'];
		$outros = $resultado['OUTROS'];

	}
}

if (isset($_POST['atualizar'])) {

	require '../Banco/conexao.php';

	$idPaciente = addslashes($_POST['idPaciente']);
	$prontuario = addslashes($_POST['prontuario']);
	$dataCadastro = addslashes($_POST['dataCadastro']);
	$nomePaciente = addslashes($_POST['nomePaciente']);
	$dataNascimento = addslashes($_POST['dataNascimento']);
	$cpfPaciente = addslashes($_POST['cpfPaciente']);
	$rgPaciente = addslashes($_POST['rgPaciente']);
	$sexoPaciente = addslashes($_POST['sexoPaciente']);
	$telefonePaciente = addslashes($_POST['telefonePaciente']);
	$telefoneOpcionalPaciente = addslashes($_POST['telefoneOpcionalPaciente']);
	$estadoCivil = addslashes($_POST['estadoCivil']);
	$cidadePaciente = addslashes($_POST['cidade']);
	$bairroPaciente = addslashes($_POST['bairro']);
	$ruaPaciente = addslashes($_POST['rua']);
	$endereco = addslashes($_POST['numCasa']);
	$responsavel = addslashes($_POST['responsavel']);
	$situaçãoPaciente = addslashes($_POST['situacao']);
	$tipoPaciente = addslashes($_POST['tipoPaciente']);
	$queixaPricipal = addslashes($_POST['queixaPrincipal']);
	$disponibilidade = addslashes($_POST['disponibilidade']);
	$setorDeEncaminhamento = addslashes($_POST['setorEncaminhado']);
	$contrarreferencia = addslashes($_POST['contrareferencia']);
	$outros = addslashes($_POST['outros']);

	$banco = new Banco("localhost","psico","root","");

	try {

		$banco->update("paciente", array(
			"PRONTUARIO"=>$prontuario,
			"DATACADASTRO"=>$dataCadastro,
			"NOMEPACIENTE"=>$nomePaciente,
			"DATANASCIMENTO"=>$dataNascimento,
			"CPFPACIENTE" =>$cpfPaciente,
			"RGPACIENTE"=>$rgPaciente,
			"SEXOPACIENTE"=>$sexoPaciente,
			"TELEFONEPACIENTE"=>$telefonePaciente,
			"TELEFONEOPCIONALPACIENTE"=>$telefoneOpcionalPaciente,
			"ESTADOCIVIL"=>$estadoCivil,
			"CIDADEPACIENTE"=>$cidadePaciente,
			"BAIRROPACIENTE"=>$bairroPaciente,
			"RUAPACIENTE"=>$ruaPaciente,
			"ENDERECO"=>$endereco,
			"RESPONSAVEL"=>$responsavel,
			"SITUACAOPACIENTE"=>$situaçãoPaciente,
			"TIPOPACIENTE"=>$tipoPaciente,
			"QUEIXAPRINCIPAL"=>$queixaPricipal,
			"DISPONIBILIDADE"=>$disponibilidade,
			"SETORDEENCAMINHAMENTO"=>$setorDeEncaminhamento,
			"CONTRARREFERENCIA"=>$contrarreferencia,
			"OUTROS"=>$outros
		),array("IDPACIENTE" => $idPaciente));

		echo "<script>alert('ALTERADO COM SUCESSO !!');window.location = '../telas/TelaPaciente.php';</script>";
	
	} catch (Exception $e) {
		echo "<script>alert('ERRO AO ALTERADO PACIENTE!!')</script>";
	}
}

?>