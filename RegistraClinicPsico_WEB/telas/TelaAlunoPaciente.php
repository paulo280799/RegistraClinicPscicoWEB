<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="http://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Menu Princial!</title>
</head>

<body>
    <?php include_once '../Util/NavBar.php'; ?>
    <?php include_once '../Atendimento/EditarAlunoPaciente.php'; ?>
    <div class="container">


        <?php if (isset($_GET['editar'])) : ?>
        <form action="../Atendimento/EditarAlunoPaciente.php" method="post">
            <?php else : ?>
            <form action="../Atendimento/CadastrarAlunoPaciente.php" method="post">
                <?php endif; ?>
                <fieldset>
                    <legend class="fw" style="text-align: center;">Vincular<br> Aluno -> Paciente</legend>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <br>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label id="idAluno" class="fw">Aluno:</label>
                            <select name="idAluno" class="form-control select2-single" id="idAluno" required>
                                <option value="">Selecione</option>
                                <?php
                                require_once '../Banco/conexao.php';

                                $banco = new Banco("localhost", "psico", "root", "");

                                $banco->query("SELECT IDALUNO, NOMEALUNO FROM  aluno");

                                foreach ($banco->result() as $aluno) : ?>
                                <option value="<?php echo $aluno['IDALUNO']; ?>" <?php
                                                                                        if ($aluno['IDALUNO'] == $aluno_idAluno) {
                                                                                            echo "selected";
                                                                                        }
                                                                                        ?>><?php echo $aluno['NOMEALUNO']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group col-sm-6">
                            <label id="idPaciente" class="fw">Paciente:</label>
                            <select name="idPaciente" class="form-control select2-single" id="idPaciente" required>
                                <option value="">Selecione</option>
                                <?php

                                $banco2 = new Banco("localhost", "psico", "root", "");

                                $banco2->query("SELECT * FROM paciente");

                                foreach ($banco2->result() as $paciente) : ?>
                                <option value="<?php echo $paciente['IDPACIENTE']; ?>" <?php
                                                                                            if ($paciente['IDPACIENTE'] == $paciente_idPaciente) {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>><?php echo $paciente['NOMEPACIENTE']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label id="dataAtendimento" class="fw">Data Atendimento:</label>
                            <input type="date" name="dataAtendimento" class="form-control" value="<?php echo $dataInicioAtendimento; ?>" id="dataAtendimento" required />
                        </div>                        
                    </div>
                    <?php if (isset($_GET['editar'])) : ?>
                    <button type="submit" name="atualizar" value="atualizar" class="btn btn-outline-primary" style="background-color: #26619c; color: white;">
                        Atualizar
                    </button>
                    <?php else : ?>
                    <button type="submit" name="cadastrar" value="cadastrar" class="btn btn-outline-success" style="background-color: #26619c; color: white;">
                        Salvar
                    </button>
                    <?php endif; ?>
                    <button type="reset" class="btn btn-outline-success">Limpar</button>
                    <a href="TelaPesquisaAlunoPaciente.php" class="btn btn-outline-success">Pesquisar</a>
                </fieldset>
            </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php include_once '../Util/Footer.php'; ?>
</body>

</html>