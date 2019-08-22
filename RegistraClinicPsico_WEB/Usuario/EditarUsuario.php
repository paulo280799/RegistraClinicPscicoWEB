re<?php

$id = 0;
$nome = "";
$login = "";
$senha = "";
$nivel = "";

if (isset($_GET['editar'])) {

    require '../Banco/conexao.php';

    $id = $_GET['editar'];

    $banco = new Banco("localhost", "psico", "root", "");

    $banco->query("SELECT * FROM usuario WHERE idUsuario=$id");

    foreach ($banco->result() as $resultado) {

        $nome = $resultado['nomeUsuario'];
        $login = $resultado['loginUsuario'];
        $senha = $resultado['senhaUsuario'];
        $id = $resultado['idUsuario'];
        $nivel = $resultado['tipoUsuario'];
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
