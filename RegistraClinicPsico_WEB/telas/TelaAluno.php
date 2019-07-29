<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Aluno!</title>
</head>
<body>
  <?php include_once '../Util/NavBar.php'; ?>

  <br>

  <div class="container">
    <form action="../Aluno/CadastroAluno.php" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Aluno</legend>
        
        <div class="form-group">
          <label id="nomeAluno" class="fw">Nome:</label>
          <input type="text" name="nomeAluno" class="form-control" id="nomeAluno">
        </div>

        <div class="form-group">
          <label id="matriculaAluno" class="fw">Matricula:</label>
          <input type="text" name="matriculaAluno" class="form-control" id="matriculaAluno">
        </div>

        <div class="form-group">
          <label id="cpfAluno" class="fw">CPF:</label>
          <input type="text" name="cpfAluno" class="form-control" id="cpfAluno">
        </div>

        <div class="form-group">
          <label id="rgAluno" class="fw">RG:</label>
          <input type="text" name="rgAluno" class="form-control" id="rgAluno">
        </div>

        <div class="form-group">
          <label style="margin-right: 5px;" class="fw">Sexo:</label>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexoAluno" value="M" id="masc" >
            <label class="form-check-input" for="masc">Masculino</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexoAluno" value="F" id="femi">
            <label class="form-check-input" for="femi">Feminino</label>
          </div>
        </div>

        <div class="form-group">
          <label id="telefone" class="fw">Telefone:</label>
          <input type="text" name="telefoneAluno" class="form-control" id="telefone" >
        </div>

        <div class="form-group">
          <label id="dataNascimentoAluno" class="fw">Data de Nascimento:</label>
          <input type="date" name="dataNascimentoAluno" class="form-control" id="dataNascimentoAluno">
        </div>

        <div class="form-group">
          <label id="estadoAluno" class="fw">Estado:</label>
          <input type="text" name="estadoAluno" class="form-control" id="estadoAluno" >
        </div>

        <div class="form-group">
          <label id="cidadeAluno" class="fw">Cidade:</label>
          <input type="text" name="cidadeAluno" class="form-control" id="cidadeAluno" >
        </div>

        <div class="form-group">
          <label id="bairroAluno" class="fw">Bairro:</label>
          <input type="text" name="bairroAluno" class="form-control" id="bairroAluno">
        </div>

        <div class="form-group">
          <label id="ruaAluno" class="fw">Rua:</label>
          <input type="text" name="ruaAluno" class="form-control" id="ruaAluno" >
        </div>

        <div class="form-group">
          <label id="numCasaAluno" class="fw">Numero da casa:</label>
          <input type="text" name="numCasaAluno" class="form-control" id="numCasaAluno" >
        </div>

        <div class="form-group">
          <label id="emailAluno" class="fw">Email:</label>
          <input type="text" name="emailAluno" class="form-control" id="emailAluno" >
        </div>

        <div class="form-group">
          <label id="complementoAluno" class="fw">Complemento:</label>
          <input type="text" name="complementoAluno" class="form-control" id="complementoAluno" >
        </div>

        <div class="form-group">
          <label id="turmaAluno" class="fw">Turma do Aluno:</label>
          <input type="text" name="turmaAluno" class="form-control" id="turmaAluno" >
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
  
  <?php include_once '../Util/Footer.php'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>