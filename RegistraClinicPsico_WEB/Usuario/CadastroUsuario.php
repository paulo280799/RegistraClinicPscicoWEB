<?php  

include_once '../Usuario/Usuario.php';
require '../Banco/conexao.php';

$nomeUsuario = addslashes($_POST['nomeUsuario']);
$loginUsuario= addslashes($_POST['loginUsuario']);
$senhaUsuario= addslashes($_POST['senhaUsuario']);
$nivelUsuario= addslashes($_POST['nivelUsuario']);

$Usuario = new Usuario();

$Usuario->setNomeUsuario($nomeUsuario);
$Usuario->setLoginUsuario($loginUsuario);
$Usuario->setSenhaUsuario($senhaUsuario);
$Usuario->setNivelUsuario($nivelUsuario);

$banco = new Banco("localhost","psico","root","");

try {

	$banco->insert("usuario", array(
	"loginUsuario"=>$loginUsuario,
	"nomeUsuario"=>$nomeUsuario,
	"senhaUsuario" =>$senhaUsuario,
	"tipoUsuario"=>$nivelUsuario
));

	echo "<script>alert('SALVO COM SUCESSO !!');window.location = '../telas/TelaUsuario.php';</script>";
	
} catch (Exception $e) {
	echo "<script>alert('ERRO AO SALVAR USUÁRIO!!')</script>";
}
