<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Supervisor!</title>
  </head>
  <body>
    <?php include_once '../Util/NavBar.php'; ?>
  <br>
  <br>
  <br>

  <div class="container">
    <form action="../Supervisor/CadastroSupervisor.php" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Supervisor</legend>
        
        <div class="form-group">
          <label id="nomeSupervisor" class="fw">Nome:</label>
          <input type="text" name="nomeSupervisor" class="form-control" id="nomeSupervisor">
        </div>

        <div class="form-group">
          <label id="cpfSupervisor" class="fw">CPF:</label>
          <input type="text" name="cpfSupervisor" class="form-control" id="cpfSupervisor">
        </div>

        <div class="form-group">
          <label id="rgSupervisor" class="fw">RG:</label>
          <input type="text" name="rgSupervisor" class="form-control" id="rgSupervisor">
        </div>

        <div class="form-group">
          <label style="margin-right: 5px;" class="fw">Sexo:</label>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexoSupervisor" value="M" id="masc" >
            <label class="form-check-input" for="masc">Masculino</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexoSupervisor" value="F" id="femi">
            <label class="form-check-input" for="femi">Feminino</label>
          </div>
        </div>

        <div class="form-group">
          <label id="telefoneSupervisor" class="fw">Telefone:</label>
          <input type="text" name="telefoneSupervisor" class="form-control" id="telefoneSupervisor" >
        </div>

        <div class="form-group">
          <label id="dataNascimentoSupervisor" class="fw">Data de Nascimento:</label>
          <input type="date" name="dataNascimentoSupervisor" class="form-control" id="dataNascimentoSupervisor">
        </div>

        <div class="form-group">
          <label id="estadoSupervisor" class="fw">Estado:</label>
          <input type="text" name="estadoSupervisor" class="form-control" id="estadoSupervisor" >
        </div>

        <div class="form-group">
          <label id="cidadeSupervisor" class="fw">Cidade:</label>
          <input type="text" name="cidadeSupervisor" class="form-control" id="cidadeSupervisor" >
        </div>

        <div class="form-group">
          <label id="bairroSupervisor" class="fw">Bairro:</label>
          <input type="text" name="bairroSupervisor" class="form-control" id="bairroSupervisor">
        </div>

        <div class="form-group">
          <label id="ruaSupervisor" class="fw">Rua:</label>
          <input type="text" name="ruaSupervisor" class="form-control" id="ruaSupervisor" >
        </div>

        <div class="form-group">
          <label id="numCasaSupervisor" class="fw">Numero da casa:</label>
          <input type="text" name="numCasaSupervisor" class="form-control" id="numCasaSupervisor" >
        </div>

        <div class="form-group">
          <label id="emailSupervisor" class="fw">Email:</label>
          <input type="text" name="emailSupervisor" class="form-control" id="emailSupervisor" >
        </div>

        <div class="form-group">
          <label id="complementoSupervisor" class="fw">Complemento:</label>
          <input type="text" name="complementoSupervisor" class="form-control" id="complementoSupervisor" >
        </div>

        <div class="form-group">
          <label id="turmaSupervisor" class="fw">Turma do Supervisor:</label>
          <input type="text" name="turmaSupervisor" class="form-control" id="turmaSupervisor" >
        </div>

        <div class="form-group">
          <label id="especializacaoSupervisor" class="fw">Especialização:</label>
          <input type="text" name="especializacaoSupervisor" class="form-control" id="especializacaoSupervisor" >
        </div>

        <br>
        <br>
        <br>

        <button type="submit" value="cadastrar" class="btn btn-outline-success">ENVIAR</button>
        <button type="submit" class="btn btn-outline-success">LIMPAR</button>
        <button type="submit" class="btn btn-outline-success">Pesquisar</button>
      </fieldset>  
    </form>   
  </div>

  <br>
  <br>
  <br>
  <?php include_once '../Util/Footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>