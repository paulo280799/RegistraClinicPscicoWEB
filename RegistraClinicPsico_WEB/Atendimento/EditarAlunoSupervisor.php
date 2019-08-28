<?php

$id = 0;
$dataInicioSupervisao = "";
$aluno_idAluno = 0;
$supervisor_idSupervisor = 0;


if (isset($_GET['editar'])) {

    require_once '../Banco/conexao.php';

    $id = $_GET['editar'];

    $banco_agendamento = new Banco("localhost", "psico", "root", "");

    $banco_agendamento->query("SELECT * FROM vincularalunosupervisor WHERE idVincularAlunosSupervisor=$id");

    foreach ($banco_agendamento->result() as $resultado) {

        $id = $resultado['idVincularAlunosSupervisor'];
        $dataInicioSupervisao = $resultado['dataInicioSupervisao'];
        $aluno_idAluno = $resultado['aluno_idAluno'];
        $supervisor_idSupervisor = $resultado['supervisor_idSupervisor'];
    }
}

if (isset($_POST['atualizar'])) {

    require '../Banco/conexao.php';
    require_once 'AlunoSupervisor.php';

    $id = addslashes($_POST['id']);
    $dataInicioSupervisao = addslashes($_POST['dataInicioSupervisao']);
    $aluno_idAluno = addslashes($_POST['idAluno']);
    $supervisor_idSupervisor = addslashes($_POST['idSupervisor']);

    $AlunoSupervisor = new AlunoSupervisor();

    $AlunoSupervisor->setIdVincularAlunoSupervisor($id);
    $AlunoSupervisor->setDataInicioSupervisao($dataInicioSupervisao);
    $AlunoSupervisor->setAluno_idAluno($aluno_idAluno);
    $AlunoSupervisor->setSupervisor_idSupervisor($supervisor_idSupervisor);


    $banco = new Banco("localhost", "psico", "root", "");


    try {

        $banco->update("vincularalunosupervisor", array(
            "dataInicioSupervisao" => $dataInicioSupervisao,
            "aluno_idAluno" => $aluno_idAluno,
            "supervisor_idSupervisor" => $supervisor_idSupervisor
        ), array("idVincularAlunosSupervisor" => $id));


        echo "<script>alert('EDITADO COM SUCESSO !!');window.location = '../telas/TelaAlunoSupervisor.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO EDITAR Aluno Supervisor!!')</script>";
    }
}
