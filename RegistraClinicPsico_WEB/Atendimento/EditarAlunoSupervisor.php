<?php

$id = 0;
$dataInicioSupervisao = "";
$aluno_idAluno = "";
$supervisor_idSupervisor = "";


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
    require_once 'Usuario.php';

    $idUsuario = addslashes($_POST['idUsuario']);
    $nomeUsuario = addslashes($_POST['nomeUsuario']);
    $loginUsuario = addslashes($_POST['loginUsuario']);
    $senhaUsuario = addslashes($_POST['senhaUsuario']);
    $nivelUsuario = addslashes($_POST['nivelUsuario']);

    $Usuario = new Usuario();

    $Usuario->setIdUsuario($idUsuario);
    $Usuario->setNomeUsuario($nomeUsuario);
    $Usuario->setLoginUsuario($loginUsuario);
    $Usuario->setSenhaUsuario($senhaUsuario);
    $Usuario->setNivelUsuario($nivelUsuario);

    $banco = new Banco("localhost", "psico", "root", "");

    try {

        $banco->update("usuario", array(
            "loginUsuario" => $loginUsuario,
            "nomeUsuario" => $nomeUsuario,
            "senhaUsuario" => $senhaUsuario,
            "tipoUsuario" => $nivelUsuario
        ), array("idUsuario" => $idUsuario));

        echo "<script>alert('EDITADO COM SUCESSO !!');window.location = '../telas/TelaUsuario.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO EDITAR USUÁRIO!!')</script>";
    }
}
