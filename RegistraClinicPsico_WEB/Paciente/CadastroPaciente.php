<?php  
include_once '../Paciente/Paciente.php';
require '../Banco/conexao.php';

$nomePaciente = addslashes($_POST['nomePaciente']);
$idadePaciente = addslashes($_POST['idadePaciente']);
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

$Paciente = new Paciente();

$Paciente->setNome($nomePaciente);
	$Paciente->setDataNasc($idadePaciente);
	$Paciente->setCpf($cpfPaciente);
	$Paciente->setRg($rgPaciente);
	$Paciente->setSexo($sexoPaciente);
	$Paciente->setTelefone($telefonePaciente);
	$Paciente->setTelefoneOpcional($telefoneOpcionalPaciente);
	$Paciente->setEstadoCivil($estadoCivil);

	$Paciente->setCidade($cidadePaciente);
	$Paciente->setBairro($bairroPaciente);
	$Paciente->setRua($ruaPaciente);
	$Paciente->setEndereco($endereco);

	$Paciente->setResponsavel($responsavel);
	$Paciente->setSituacaoPaciente($situaçãoPaciente);
	$Paciente->setTipoPaciente($tipoPaciente);
	$Paciente->setQueixa($queixaPricipal);
	$Paciente->setDisponibilidade($disponibilidade);
	$Paciente->setSetorEncaminhamento($setorDeEncaminhamento);
	$Paciente->setContraReferencia($contrarreferencia);
	$Paciente->setOutros($outros);

$banco = new Banco("localhost","psico","root","");

try {

	$banco->insert("paciente", array(
	"NOMEPACIENTE"=>$nomePaciente,
	"IDADEPACIENTE"=>$idadePaciente,
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
));

include_once('../pdf/PDFCadastroPaciente.php');

	echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../telas/TelaPaciente.php';</script>";

	
} catch (Exception $e) {
	echo "<script>alert('ERRO AO SALVAR PACIENTE!!')</script>";
}
