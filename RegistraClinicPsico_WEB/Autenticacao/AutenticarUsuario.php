<?php

include_once '../Usuario/Usuario.php';
require '../Banco/conexao.php';

$loginUsuario = addslashes($_POST['loginUsuario']);
$senhaUsuario = addslashes($_POST['senhaUsuario']);

$Usuario = new Usuario();

$Usuario->setLoginUsuario($loginUsuario);
$Usuario->setSenhaUsuario($senhaUsuario);

$banco = new Banco("localhost", "psico", "root", "");

try {

    $banco->query("SELECT * FROM usuario WHERE loginUsuario = '$loginUsuario' AND senhaUsuario = '$senhaUsuario'");

    foreach ($banco->result() as $usuario) :

        session_start();

        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['nomeUsuario'] = $usuario['nomeUsuario'];
        $_SESSION['loginUsuario'] = $usuario['loginUsuario'];
        $_SESSION['senhaUsuario'] = $usuario['senhaUsuario'];
        $_SESSION['tipoUsuario'] = $usuario['tipoUsuario'];

    endforeach;

    if (strlen($usuario['idUsuario']) >= 1) {
        header("Location: ../telas/Index.php");
    } else {
        header("Location: ../telas/TelaLogin.php?dadosincorretos");
    }
} catch (Exception $e) {
    echo "<script>alert('Erro ao realizar login!')</script>";
}
