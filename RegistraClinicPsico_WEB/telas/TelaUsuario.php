<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Usuario!</title>
  </head>
  <body>
    <?php include_once '../Util/NavBar.php'; ?>

    <div class="container">
    <form action="../Usuario/CadastroUsuario.php" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Usuário</legend>
        
        <div class="row">
        <div class="form-group col-sm-12">
          <label id="nomeUsuario" class="fw">Nome:</label>
          <input type="text" name="nomeUsuario" class="form-control" id="nomeUsuario">
        </div>

        <div class="form-group col-sm-4">
          <label id="loginUsuario" class="fw">Login:</label>
          <input type="text" name="loginUsuario" class="form-control" id="loginUsuario">
        </div>

        <div class="form-group col-sm-4">
          <label id="senhaUsuario" class="fw">Senha:</label>
          <input type="text" name="senhaUsuario" class="form-control" id="senhaUsuario">
        </div>

        <div class="form-group col-sm-4">
          <label id="nivelUsuario" class="fw">Nível de acesso:</label>
          <select name="nivelUsuario" class="form-control" id="nivelUsuario">
            <option>Selecione</option>
            <option value="Administrador">Administrador</option>
            <option value="Funcionario">Funcionário</option>
          </select>
        </div>
        </div>
        <br>
        <button type="submit" value="cadastrar" class="btn btn-outline-success">ENVIAR</button>
        <button type="reset" class="btn btn-outline-success">LIMPAR</button>
        <a href="TelaPesquisaUsuario.php" class="btn btn-outline-success">Pesquisar</a>


      </fieldset>
    </form>
  </div>

    <?php include_once '../Util/Footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>