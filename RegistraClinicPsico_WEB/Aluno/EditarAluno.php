<?php

$id = 0;
$nomeAluno = "";
$matriculaAluno = "";
$cpfAluno = "";
$rgAluno = "";
$sexoAluno = "";
$telefoneAluno = "";
$dataNascimentoAluno = "";
$estadoAluno = "";
$cidadeAluno = "";
$bairroAluno = "";
$ruaAluno = "";
$numCasaAluno = "";
$emailAluno = "";
$complementoAluno = "";
$turmaAluno = "";

if (isset($_GET['editar'])) {

    require '../Banco/conexao.php';

    $id = $_GET['editar'];

    $banco = new Banco("localhost", "psico", "root", "");

    $banco->query("SELECT * FROM aluno WHERE IDALUNO=$id");

    foreach ($banco->result() as $resultado) {

        $idAluno = $resultado['IDALUNO'];
        $nomeAluno = $resultado['NOMEALUNO'];
        $matriculaAluno = $resultado['MATRICULAALUNO'];
        $cpfAluno = $resultado['CPFALUNO'];
        $rgAluno = $resultado['RGALUNO'];
        $sexoAluno = $resultado['SEXOALUNO'];
        $telefoneAluno = $resultado['TELEFONEALUNO'];
        $dataNascimentoAluno = $resultado['DATANASCIMENTOALUNO'];
        $estadoAluno = $resultado['ESTADOALUNO'];
        $cidadeAluno = $resultado['CIDADEALUNO'];
        $bairroAluno = $resultado['BAIRROALUNO'];
        $ruaAluno = $resultado['RUAALUNO'];
        $numCasaAluno = $resultado['NUMCASAALUNO'];
        $emailAluno = $resultado['EMAILALUNO'];
        $complementoAluno = $resultado['COMPLEMENTOALUNO'];
        $turmaAluno = $resultado['TURMAALUNO'];
        
    }
}

if (isset($_POST['atualizar'])) {

    require '../Banco/conexao.php';
    require_once 'Aluno.php';

    $idAluno  = addslashes($_POST['idAluno']);
    $nomeAluno = addslashes($_POST['nomeAluno']);
    $matriculaAluno= addslashes($_POST['matriculaAluno']);
    $cpfAluno= addslashes($_POST['cpfAluno']);
    $rgAluno= addslashes($_POST['rgAluno']);
    $sexoAluno= addslashes($_POST['sexoAluno']);
    $telefoneAluno= addslashes($_POST['telefoneAluno']);
    $dataNascimentoAluno= addslashes($_POST['dataNascimentoAluno']);
    $estadoAluno= addslashes($_POST['estadoAluno']);
    $cidadeAluno= addslashes($_POST['cidadeAluno']);
    $bairroAluno= addslashes($_POST['bairroAluno']);
    $ruaAluno= addslashes($_POST['ruaAluno']);
    $numCasaAluno= addslashes($_POST['numCasaAluno']);
    $emailAluno= addslashes($_POST['emailAluno']);
    $complementoAluno= addslashes($_POST['complementoAluno']);
    $turmaAluno= addslashes($_POST['turmaAluno']);

    $Aluno = new Aluno();

    $Aluno->setIDAluno($idAluno);
    $Aluno->setNomeAluno($nomeAluno);
    $Aluno->setMatriculaAluno($matriculaAluno);
    $Aluno->setCPFAluno($cpfAluno);
    $Aluno->setRGAluno($rgAluno);
    $Aluno->setTelefoneAluno($telefoneAluno);
    $Aluno->setDataNascimentoAluno($dataNascimentoAluno);
    $Aluno->setSexoAluno($sexoAluno);
    $Aluno->setEstadoAluno($estadoAluno);
    $Aluno->setCidadeAluno($cidadeAluno);
    $Aluno->setBairroAluno($bairroAluno);
    $Aluno->setRuaAluno($ruaAluno);
    $Aluno->setNumCasaAluno($numCasaAluno);
    $Aluno->setEmailAluno($emailAluno);
    $Aluno->setComplementoAluno($complementoAluno);
    $Aluno->setTurmaAluno($turmaAluno);

    $banco = new Banco("localhost", "psico", "root", "");

    try {

        $banco->update("aluno", array(
            "NOMEALUNO"=>$nomeAluno,
            "MATRICULAALUNO" =>$matriculaAluno,
            "CPFALUNO"=>$cpfAluno,
            "RGALUNO"=>$rgAluno,
            "SEXOALUNO"=>$sexoAluno,
            "TELEFONEALUNO"=>$telefoneAluno,
            "DATANASCIMENTOALUNO"=>$dataNascimentoAluno,
            "ESTADOALUNO"=>$estadoAluno,
            "CIDADEALUNO"=>$cidadeAluno,
            "BAIRROALUNO"=>$bairroAluno,
            "RUAALUNO"=>$ruaAluno,
            "NUMCASAALUNO"=>$numCasaAluno,
            "EMAILALUNO"=>$emailAluno,
            "COMPLEMENTOALUNO"=>$complementoAluno,
            "TURMAALUNO"=>$turmaAluno
        ), array("IDALUNO" => $idAluno));

        echo "<script>alert('EDITADO COM SUCESSO !!');window.location = '../telas/TelaAluno.php';</script>";
        
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO EDITAR USUÁRIO!!')</script>";
    }
}
