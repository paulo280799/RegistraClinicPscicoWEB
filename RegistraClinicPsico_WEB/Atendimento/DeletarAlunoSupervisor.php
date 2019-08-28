<?php
if (isset($_GET['deletar'])) {

    require '../Banco/conexao.php';
    require_once 'AlunoSupervisor.php';

    $idAlunoSupervisor = addslashes($_GET['deletar']);
    $AlunoSupervisor = new AlunoSupervisor();
    $AlunoSupervisor->setIdVincularAlunoSupervisor($idAlunoSupervisor);
    $banco = new Banco("localhost", "psico", "root", "");

    try {
        $banco->delete("vincularalunosupervisor", array("idVincularAlunosSupervisor" => $idAlunoSupervisor));
        echo "<script>alert('DELETADO COM SUCESSO!!');window.location = '../telas/TelaPesquisaAlunoSupervisor.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO DELETAR USUÁRIO!!')</script>";
    }
}
