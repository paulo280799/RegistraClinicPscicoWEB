<?php  
include_once '../Aluno/Aluno.php';
require '../Banco/conexao.php';

$nomeAluno = addslashes($_POST['nomeAluno']);
$matriculaAluno= addslashes($_POST['matriculaAluno']);
$cpfAluno= addslashes($_POST['cpfAluno']);
$rgAluno= addslashes($_POST['rgAluno']);
$sexoAluno= addslashes($_POST['sexoAluno']);
$telefoneAluno= addslashes($_POST['telefoneAluno']);
$dataNascimentoAluno= addslashes($_POST['dataNascimentoAluno']);
$estadoAluno= addslashes($_POST['estadoAluno']);
$cidadeAluno= addslashes($_POST['cidadeAluno']);
$bairroAluno= addslashes($_POST['bairroAluno']);
$ruaAluno= addslashes($_POST['ruaAluno']);
$numCasaAluno= addslashes($_POST['numCasaAluno']);
$emailAluno= addslashes($_POST['emailAluno']);
$complementoAluno= addslashes($_POST['complementoAluno']);
$turmaAluno= addslashes($_POST['turmaAluno']);

$banco = new Banco("localhost","psico","root","");

try {

	$banco->insert("Aluno", array(
	"NOMEALUNO"=>$nomeAluno,
	"MATRICULAALUNO" =>$matriculaAluno,
	"CPFALUNO"=>$cpfAluno,
	"RGALUNO"=>$rgAluno,
	"SEXOALUNO"=>$sexoAluno,
	"TELEFONEALUNO"=>$telefoneAluno,
	"DATANASCIMENTOALUNO"=>$dataNascimentoAluno,
	"ESTADOALUNO"=>$estadoAluno,
	"CIDADEALUNO"=>$cidadeAluno,
	"BAIRROALUNO"=>$bairroAluno,
	"RUAALUNO"=>$ruaAluno,
	"NUMCASAALUNO"=>$numCasaAluno,
	"EMAILALUNO"=>$emailAluno,
	"COMPLEMENTOALUNO"=>$complementoAluno,
	"TURMAALUNO"=>$turmaAluno
));

	echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../telas/TelaAluno.php';</script>";
	
} catch (Exception $e) {
	echo "<script>alert('ERRO AO SALVAR USUARIO!!')</script>";
}
?>