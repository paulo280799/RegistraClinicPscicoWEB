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
  <link rel="stylesheet" href="../css/styleCadastro.css">

  <title>Agendamento!</title>
</head>

<body>
  <?php include_once '../Util/NavBar.php'; ?>

  <form style="margin:80px;" method="post" action="">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Paciente</label>
        <select class="form-control select2-single" name="paciente">
          <option selected>Escolha...</option>
          <?php

          require '../Banco/conexao.php';

          $banco = new Banco("localhost", "psico", "root", "");
          $banco->query("SELECT * FROM paciente");
          foreach ($banco->result() as $paciente) : ?>
          <option value="<?php echo $paciente['IDPACIENTE']; ?>"><?php echo $paciente['NOMEPACIENTE']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Aluno</label>
        <select class="form-control select2-single" name="aluno">
          <option selected>Escolha...</option>
          <?php
          $banco2 = new Banco("localhost", "psico", "root", "");
          $banco2->query("SELECT * FROM aluno");
          foreach ($banco2->result() as $aluno) : ?>
          <option value="<?php echo $aluno['IDALUNO'] ?>"><?php echo $aluno['NOMEALUNO'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Data</label>
        <input type="date" name="data" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Horário</label>
        <input type="time" name="hora" class="form-control">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
    <button type="reset" class="btn btn-danger">Limpar</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <?php include_once '../Util/Footer.php'; ?>
</body>

</html>