<?php
if (isset($_GET['deletar'])) {

    require '../Banco/conexao.php';
    require_once 'AlunoPaciente.php';

    $idVincularPacienteAluno = addslashes($_GET['deletar']);
    $AlunoPaciente = new AlunoPaciente();
    $AlunoPaciente->setIdVincularPacienteAluno($idVincularPacienteAluno);
    $banco = new Banco("localhost", "psico", "root", "");

    try {
        $banco->delete("vincularpacientealuno", array("idVincularPacienteAluno" => $idVincularPacienteAluno));
        echo "<script>alert('DELETADO COM SUCESSO!!');window.location = '../telas/TelaPesquisaAlunoPaciente.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO DELETAR Aluno Paciente!!')</script>";
    }
}
