<?php

$id = 0;
$dataInicioAtendimento = "";
$aluno_idAluno = "";
$paciente_idPaciente = "";

if (isset($_GET['editar'])) {

    require_once '../Banco/conexao.php';

    $id = $_GET['editar'];

    $banco_agendamento = new Banco("localhost", "psico", "root", "");

    $banco_agendamento->query("SELECT * FROM vincularpacientealuno WHERE idVincularPacienteAluno=$id");

    foreach ($banco_agendamento->result() as $resultado) {

        $id = $resultado['idVincularPacienteAluno'];
        $dataInicioAtendimento = $resultado['dataInicioAtendimento'];
        $aluno_idAluno = $resultado['aluno_idAluno'];
        $paciente_idPaciente = $resultado['paciente_idPaciente'];
    }

    
}

if (isset($_POST['atualizar'])) {

    require '../Banco/conexao.php';
    require_once 'AlunoPaciente.php';

    $id = addslashes($_POST['id']);
    $dataInicioAtendimento = addslashes($_POST['dataAtendimento']);
    $aluno_idAluno = addslashes($_POST['idAluno']);
    $paciente_idPaciente = addslashes($_POST['idPaciente']);

    $AlunoPaciente = new AlunoPaciente();

    $AlunoPaciente->setIdVincularPacienteAluno($id);
    $AlunoPaciente->setDataInicioAtendimento($dataInicioAtendimento);
    $AlunoPaciente->setAluno_idAluno($aluno_idAluno);
    $AlunoPaciente->setPaciente_idPaciente($paciente_idPaciente);


    $banco = new Banco("localhost", "psico", "root", "");


    try {

        $banco->update("vincularpacientealuno", array(
            "dataInicioAtendimento" => $dataInicioAtendimento,
            "aluno_idAluno" => $aluno_idAluno,
            "paciente_idPaciente" => $paciente_idPaciente
        ), array("idVincularPacienteAluno" => $id));


        echo "<script>alert('EDITADO COM SUCESSO !!');window.location = '../telas/TelaAlunoPaciente.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO EDITAR Aluno Paciente!!')</script>";
    }
}
