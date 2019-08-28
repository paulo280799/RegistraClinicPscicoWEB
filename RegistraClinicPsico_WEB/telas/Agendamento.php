<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Agendamento!</title>
</head>
<body>
  <?php include_once '../Util/NavBar.php'; ?>
  
    <div class="form-group col-sm-6">
        <label id="idPaciente" class="fw">Paciente:</label>
        <select name="idPaciente" class="form-control select2-single" id="idPaciente" required>
            <option value="">Selecione</option>
            <?php

            $banco2 = new Banco("localhost", "psico", "root", "");

            $banco2->query("SELECT * FROM paciente");

            foreach ($banco2->result() as $paciente) : ?>
                <option value="<?php echo $paciente['IDPACIENTE']; ?>"><?php echo $paciente['NOMEPACIENTE']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
  
  <?php include_once '../Util/Footer.php'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>