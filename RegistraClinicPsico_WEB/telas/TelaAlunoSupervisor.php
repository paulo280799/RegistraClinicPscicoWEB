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

    <title>Aluno - Supervisor!</title>
</head>

<body>
    <?php include_once '../Util/NavBar.php'; ?>
    <?php include_once '../Atendimento/EditarAlunoSupervisor.php'; ?>
    <div class="container">

        <?php if (isset($_GET['editar'])) : ?>
        <form action="../Atendimento/EditarAlunoSupervisor.php" method="post">
            <?php else : ?>
            <form action="../Atendimento/CadastrarAlunoSupervisor.php" method="post">
                <?php endif; ?>
                <fieldset>
                    <legend class="fw" style="text-align: center;">Vincular<br> Aluno -> Supervisor</legend>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label id="idAluno" class="fw">Aluno:</label>
                            <select name="idAluno" class="form-control select2-single" id="idAluno" required>
                                <option value="">Selecione</option>
                                <?php
                                require_once '../Banco/conexao.php';

                                $banco = new Banco("localhost", "psico", "root", "");

                                $banco->query("SELECT IDALUNO, NOMEALUNO , MATRICULAALUNO , CPFALUNO, EMAILALUNO, TURMAALUNO FROM  aluno");

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
                            <label id="idSupervisor" class="fw">Supervisor:</label>
                            <select name="idSupervisor" class="form-control select2-single" id="idSupervisor" required>
                                <option value="">Selecione</option>
                                <?php

                                $banco2 = new Banco("localhost", "psico", "root", "");

                                $banco2->query("SELECT * FROM supervisor");

                                foreach ($banco2->result() as $supervisor) : ?>
                                <option value="<?php echo $supervisor['idSupervisor']; ?>" <?php
                                                                                                if ($supervisor['idSupervisor'] == $supervisor_idSupervisor) {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>><?php echo $supervisor['nomeSupervisor']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label id="idAluno" class="fw">Data Inicio Supervisão:</label>
                            <input type="date" name="dataInicioSupervisao" class="form-control" value="<?php echo $dataInicioSupervisao; ?>" id="idAluno" required />
                        </div>
                    </div>
                    <?php if (isset($_GET['editar'])) : ?>
                    <button class="btn btn-primary" type="submit" name="atualizar" value="atualizar">Atualizar</button>
                    <?php else : ?>
                    <button class="btn btn-primary" type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
                    <?php endif; ?>
                    <input class="btn btn-primary" type="reset" value="Limpar">
                    <a class="btn btn-primary" href="TelaPesquisaAlunoSupervisor.php" role="button">Pesquisar</a>
                </fieldset>
            </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php include_once '../Util/Footer.php'; ?>
</body>

</html>