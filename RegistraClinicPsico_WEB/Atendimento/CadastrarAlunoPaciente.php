<?php
include_once 'AlunoPaciente.php';
require '../Banco/conexao.php';


$dataInicioAtendimento = addslashes($_POST['dataAtendimento']);
$aluno_idAluno = addslashes($_POST['idAluno']);
$paciente_idPaciente = addslashes($_POST['idPaciente']);

$AlunoPaciente = new AlunoPaciente();

$AlunoPaciente->setDataInicioAtendimento($dataInicioAtendimento);
$AlunoPaciente->setAluno_idAluno($aluno_idAluno);
$AlunoPaciente->setPaciente_idPaciente($paciente_idPaciente);


$banco = new Banco("localhost", "psico", "root", "");

try {
    $banco->insert("vincularpacientealuno", array(
        "dataInicioAtendimento" => $dataInicioAtendimento,
        "aluno_idAluno" => $aluno_idAluno,
        "paciente_idPaciente" => $paciente_idPaciente
    ));


    echo "<script>alert('Atendimento Aluno Paciente SALVO COM SUCESSO !!');window.location = '../telas/TelaAlunoPaciente.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('ERRO AO SALVAR Aluno Paciente!!')</script>";
}
