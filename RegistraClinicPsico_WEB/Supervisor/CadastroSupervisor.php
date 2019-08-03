<?php  
include_once '../Supervisor/Supervisor.php';
require '../Banco/conexao.php';

$nomeSupervisor = addslashes($_POST['nomeSupervisor']);
$cpfSupervisor= addslashes($_POST['cpfSupervisor']);
$rgSupervisor= addslashes($_POST['rgSupervisor']);
$telefoneSupervisor= addslashes($_POST['telefoneSupervisor']);
$dataNascimentoSupervisor= addslashes($_POST['dataNascimentoSupervisor']);
$sexoSupervisor= addslashes($_POST['sexoSupervisor']);

$estadoSupervisor= addslashes($_POST['estadoSupervisor']);
$cidadeSupervisor= addslashes($_POST['cidadeSupervisor']);
$bairroSupervisor= addslashes($_POST['bairroSupervisor']);
$ruaSupervisor= addslashes($_POST['ruaSupervisor']);
$numCasaSupervisor= addslashes($_POST['numCasaSupervisor']);

$emailSupervisor= addslashes($_POST['emailSupervisor']);
$complementoSupervisor= addslashes($_POST['complementoSupervisor']);
$turmaSupervisor= addslashes($_POST['turmaSupervisor']);
$especializacaoSupervisor = addslashes($_POST['especializacaoSupervisor']);

$Supervisor = new Supervisor();

$Supervisor->setNomeSupervisor($nomeSupervisor);
$Supervisor->setCPFSupervisor($cpfSupervisor);
$Supervisor->setRGSupervisor($rgSupervisor);
$Supervisor->setTelefoneSupervisor($telefoneSupervisor);
$Supervisor->setDataNascimentoSupervisor($dataNascimentoSupervisor);
$Supervisor->setSexoSupervisor($sexoSupervisor);

$Supervisor->setEstadoSupervisor($estadoSupervisor);
$Supervisor->setCidadeSupervisor($cidadeSupervisor);
$Supervisor->setBairroSupervisor($bairroSupervisor);
$Supervisor->setRuaSupervisor($ruaSupervisor);
$Supervisor->setNumCasaSupervisor($numCasaSupervisor);

$Supervisor->setEmailSupervisor($emailSupervisor);
$Supervisor->setComplementoSupervisor($complementoSupervisor);
$Supervisor->setTurmaSupervisor($turmaSupervisor);
$Supervisor->setEspecializacaoSupervisor($especializacaoSupervisor);

$banco = new Banco("localhost","psico","root","");

try {

	$banco->insert("supervisor", array(
	"bairroSupervisor"=>$bairroSupervisor,
	"cidadeSupervisor"=>$cidadeSupervisor,
	"complementoSupervisor" =>$complementoSupervisor,
    "cpfSupervisor"=>$cpfSupervisor,
    "dataNascimentoSupervisor"=>$dataNascimentoSupervisor,
    "emailSupervisor"=>$emailSupervisor,
    "enderecoNumeroSupervisor"=>$numCasaSupervisor,
    "enderecoSupervisor"=>$ruaSupervisor,
    "especializacaoSupervisor"=>$especializacaoSupervisor,
    "estadoSupervisor"=>$estadoSupervisor,
    "nomeSupervisor"=>$nomeSupervisor,
    "rgSupervisor"=>$rgSupervisor,
    "sexoSupervisor"=>$sexoSupervisor,
    "telefoneSupervisor"=>$telefoneSupervisor,
    "turmaSupervisor"=>$turmaSupervisor
));

	echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../telas/TelaSupervisor.php';</script>";
	
} catch (Exception $e) {
	echo "<script>alert('ERRO AO SALVAR SUPERVISOR!!')</script>";
}
?>