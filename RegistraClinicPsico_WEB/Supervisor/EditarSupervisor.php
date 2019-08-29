<?php 

$idSupervisor =0; 
$nomeSupervisor = "";
$cpfSupervisor= "";
$rgSupervisor= "";
$dataNascimentoSupervisor= "";
$sexoSupervisor= "";
$telefoneSupervisor= "";
$estadoSupervisor= "";
$cidadeSupervisor= "";
$bairroSupervisor= "";
$ruaSupervisor= "";
$numCasaSupervisor= "";
$complementoSupervisor= "";
$emailSupervisor= "";
$turmaSupervisor= "";
$especializacaoSupervisor = "";

if (isset($_GET['editar'])) {
	require '../Banco/conexao.php';

	$idSupervisor = $_GET['editar'];

	$banco = new Banco("localhost","psico","root","");

	$banco->query("SELECT * FROM supervisor WHERE idSupervisor = $idSupervisor");

	foreach ($banco->result() as $supervisor) {

		$idSupervisor = $supervisor['idSupervisor']; 
		$nomeSupervisor =  $supervisor['nomeSupervisor'];
		$cpfSupervisor=  $supervisor['cpfSupervisor'];
		$rgSupervisor=  $supervisor['rgSupervisor'];
		$dataNascimentoSupervisor=  $supervisor['dataNascimentoSupervisor'];
		$sexoSupervisor=  $supervisor['sexoSupervisor'];
		$telefoneSupervisor=  $supervisor['telefoneSupervisor'];
		$estadoSupervisor=  $supervisor['estadoSupervisor'];
		$cidadeSupervisor=  $supervisor['cidadeSupervisor'];
		$bairroSupervisor=  $supervisor['bairroSupervisor'];
		$ruaSupervisor=  $supervisor['enderecoSupervisor'];
		$numCasaSupervisor=  $supervisor['enderecoNumeroSupervisor'];
		$complementoSupervisor=  $supervisor['complementoSupervisor'];
		$emailSupervisor=  $supervisor['emailSupervisor'];
		$turmaSupervisor=  $supervisor['turmaSupervisor'];
		$especializacaoSupervisor =  $supervisor['especializacaoSupervisor'];
	}
}

if (isset($_POST['atualizar'])) {
	require '../Banco/conexao.php';

	$idSupervisor = addslashes($_POST['idSupervisor']);
	$nomeSupervisor = addslashes($_POST['nomeSupervisor']);
	$cpfSupervisor= addslashes($_POST['cpfSupervisor']);
	$rgSupervisor= addslashes($_POST['rgSupervisor']);
	$dataNascimentoSupervisor= addslashes($_POST['dataNascimentoSupervisor']);
	$sexoSupervisor= addslashes($_POST['sexoSupervisor']);
	$telefoneSupervisor= addslashes($_POST['telefoneSupervisor']);

	$estadoSupervisor= addslashes($_POST['estadoSupervisor']);
	$cidadeSupervisor= addslashes($_POST['cidadeSupervisor']);
	$bairroSupervisor= addslashes($_POST['bairroSupervisor']);
	$ruaSupervisor= addslashes($_POST['ruaSupervisor']);
	$numCasaSupervisor= addslashes($_POST['numCasaSupervisor']);

	$complementoSupervisor= addslashes($_POST['complementoSupervisor']);
	$emailSupervisor= addslashes($_POST['emailSupervisor']);
	$turmaSupervisor= addslashes($_POST['turmaSupervisor']);
	$especializacaoSupervisor = addslashes($_POST['especializacaoSupervisor']);

	$banco = new Banco("localhost","psico","root","");

	try {

	    $banco->update("SUPERVISOR", array(
	        "NOMESUPERVISOR"=>$nomeSupervisor,
	        "CPFSUPERVISOR"=>$cpfSupervisor,
	        "RGSUPERVISOR"=>$rgSupervisor,
	        "DATANASCIMENTOSUPERVISOR"=>$dataNascimentoSupervisor,
	        "SEXOSUPERVISOR"=>$sexoSupervisor,
	        "TELEFONESUPERVISOR"=>$telefoneSupervisor,
	        "ESTADOSUPERVISOR"=>$estadoSupervisor,
	        "CIDADESUPERVISOR"=>$cidadeSupervisor,
	        "BAIRROSUPERVISOR"=>$bairroSupervisor,
	        "RUASUPERVISOR"=>$ruaSupervisor,
	        "NUMCASASUPERVISOR"=>$numCasaSupervisor,
	        "COMPLEMENTOSUPERVISOR" =>$complementoSupervisor,
	        "EMAILSUPERVISOR"=>$emailSupervisor,
	        "TURMASUPERVISOR"=>$turmaSupervisor,
	        "ESPECIALIZACAOSUPERVISOR"=>$especializacaoSupervisor
	),array('IDSUPERVISOR'=>$idSupervisor));

	    echo "<script>alert('ALTERADO COM SUCESSO !!');window.location = '../telas/TelaSupervisor.php';</script>";
	    
	} catch (Exception $e) {
	    echo "<script>alert('ERRO AO ALTERADO SUPERVISOR!!')</script>";
	}
}

?>