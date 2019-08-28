<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleCadastro.css">

    <title>Agendamento!</title>
  </head>
  <body>
    <?php include_once '../Util/NavBar.php'; ?>

    <form style="margin:80px;">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label >Paciente</label>
          <select class="form-control">
            <option selected>Escolha...</option>
             
          </select>
        </div>
        <div class="form-group col-md-6">
          <label >Aluno</label>
          <select class="form-control">
            <option selected>Escolha...</option>
              <?php require '../Banco/conexao.php'; 
              $banco2 = new Banco("localhost","psico","root",""); 
              $banco2->query("SELECT * FROM aluno");
              foreach($banco2->result() as $aluno) :?>
                <option value="<?php echo $aluno['IDALUNO']?>"><?php echo $aluno['NOMEALUNO']?></option>
              <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Data</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Horário</label>
          <input type="time" class="form-control">
        </div>
      </div>
    </form>
    

    <?php include_once '../Util/Footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>