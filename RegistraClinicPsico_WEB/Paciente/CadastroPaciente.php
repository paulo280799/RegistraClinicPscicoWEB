<?php  
include_once '../Paciente/Paciente.php';

$nomePaciente = addslashes($_POST['nomePaciente']);
$idadePaciente = addslashes($_POST['idadePaciente']);
$cpfPaciente = addslashes($_POST['cpfPaciente']);
$rgPaciente = addslashes($_POST['rgPaciente']);
$sexo = addslashes($_POST['sexo']);
$telefone = addslashes($_POST['telefone']);
$telefoneOpcional = addslashes($_POST['telefoneOpcional']);
$estadoCivil = addslashes($_POST['estadoCivil']);

$cidade = addslashes($_POST['cidade']);
$bairro = addslashes($_POST['bairro']);
$rua = addslashes($_POST['rua']);
$numCasa = addslashes($_POST['numCasa']);

$responsavel = addslashes($_POST['responsavel']);
$situacao = addslashes($_POST['situacao']);
$tipoPaciente = addslashes($_POST['tipoPaciente']);
$queixaPrincipal = addslashes($_POST['queixaPrincipal']);
$disponibilidade = addslashes($_POST['disponibilidade']);
$setorEncaminhado = addslashes($_POST['setorEncaminhado']);
$contrareferencia = addslashes($_POST['contrareferencia']);
$outros = addslashes($_POST['outros']);

$Paciente = new Paciente();

$Paciente->setNome($nomePaciente);
$Paciente->setDataNasc($idadePaciente);
$Paciente->setCpf($cpfPaciente);
$Paciente->setRg($rgPaciente);
$Paciente->setSexo($sexo);
$Paciente->setTelefone($telefone);
$Paciente->setTelefoneOpcional($telefoneOpcional);
$Paciente->setEstadoCivil($estadoCivil);

$Paciente->setCidade($cidade);
$Paciente->setBairro($bairro);
$Paciente->setRua($rua);
$Paciente->setEndereco($numCasa);

$Paciente->setResponsavel($responsavel);
$Paciente->setSituacaoPaciente($situacao);
$Paciente->setTipoPaciente($tipoPaciente);
$Paciente->setQueixa($queixaPrincipal);
$Paciente->setDisponibilidade($disponibilidade);
$Paciente->setSetorEncaminhamento($setorEncaminhado);
$Paciente->setContraReferencia($contrareferencia);
$Paciente->setOutros($outros);

echo var_dump($Paciente);

?>