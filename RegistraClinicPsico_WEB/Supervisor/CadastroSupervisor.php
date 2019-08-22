<?php  
include_once '../Supervisor/Supervisor.php';
require '../Banco/conexao.php';

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

//echo var_dump($Supervisor);

$banco = new Banco("localhost","psico","root","");

try {

    $banco->insert("SUPERVISOR", array(
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
));

    echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../telas/TelaSupervisor.php';</script>";
    
} catch (Exception $e) {
    echo "<script>alert('ERRO AO SALVAR SUPERVISOR!!')</script>";
}


?>