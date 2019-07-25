<?php  
include_once '../Supervisor/Supervisor.php';

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

echo var_dump($Supervisor);

?>