<?php
include_once 'AlunoSupervisor.php';
require '../Banco/conexao.php';


$dataInicioSupervisao = addslashes($_POST['dataInicioSupervisao']);
$aluno_idAluno = addslashes($_POST['idAluno']);
$supervisor_idSupervisor = addslashes($_POST['idSupervisor']);

$AlunoSupervisor = new AlunoSupervisor();

$AlunoSupervisor->setDataInicioSupervisao($dataInicioSupervisao);
$AlunoSupervisor->setAluno_idAluno($aluno_idAluno);
$AlunoSupervisor->setSupervisor_idSupervisor($supervisor_idSupervisor);


$banco = new Banco("localhost", "psico", "root", "");

try {
    $banco->insert("vincularalunosupervisor", array(
        "dataInicioSupervisao" => $dataInicioSupervisao,
        "aluno_idAluno" => $aluno_idAluno,
        "supervisor_idSupervisor" => $supervisor_idSupervisor
    ));


    echo "<script>alert('Atendimento Aluno Supervisor SALVO COM SUCESSO !!');window.location = '../telas/TelaAlunoSupervisor.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('ERRO AO SALVAR Aluno Supervisor!!')</script>";
}
