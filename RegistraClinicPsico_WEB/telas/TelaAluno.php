<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Aluno!</title>
</head>
<body>
  <?php include_once '../Util/NavBar.php'; ?>
  <?php require_once '../Aluno/EditarAluno.php'; ?>

  <div class="container">

    <?php if(isset($_GET['editar'])):?>
    <form action="../Aluno/EditarAluno.php" method="post">
    <?php else: ?>
    <form action="../Aluno/CadastroAluno.php" method="post">
    <?php endif; ?>
    
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Aluno</legend>
        <input type="hidden" name="idAluno" value="<?php echo $idAluno; ?>">
        <div class="row">
        <div class="form-group col-sm-8">
          <label class="fw">Nome:</label>
          <input type="text" name="nomeAluno"  value="<?php echo $nomeAluno; ?> " class="form-control">
        </div>

        <div class="form-group col-sm-4">
          <label class="fw">Matricula:</label>
          <input type="text" name="matriculaAluno" value="<?php echo $matriculaAluno; ?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">CPF:</label>
          <input type="text" name="cpfAluno" value="<?php echo $cpfAluno; ?> "class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">RG:</label>
          <input type="text" name="rgAluno"  value="<?php echo $rgAluno; ?> "class="form-control">
        </div>
        
        
        <div class="form-group col-sm-4">
          <label  class="fw">Sexo Aluno:</label>
          <select name="sexoAluno" class="form-control" >
            <option value="<?php echo $sexoAluno; ?>"><?php echo $sexoAluno; ?></option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
          </select>
        </div>

        <div class="form-group col-sm-3">
          <label class="fw">Data de Nascimento:</label>
          <input type="date" name="dataNascimentoAluno" value="<?php echo $dataNascimentoAluno; ?> "class="form-control">
        </div>

        <div class="form-group col-sm-5">
          <label class="fw">Telefone:</label>
          <input type="text" name="telefoneAluno" value="<?php echo $telefoneAluno; ?>" class="form-control">
        </div>

        </div>
             
        <div class="row">        
        <div class="form-group col-sm-4">
          <label class="fw">Estado:</label>
          <input type="text" name="estadoAluno" value="<?php echo $estadoAluno; ?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Cidade:</label>
          <input type="text" name="cidadeAluno" value="<?php echo $cidadeAluno; ?>" class="form-control">
        </div>

        <div class="form-group col-sm-2">
          <label class="fw">Numero da casa:</label>
          <input type="number" name="numCasaAluno" value="<?php echo $numCasaAluno; ?> "class="form-control" >
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Rua:</label>
          <input type="text" name="ruaAluno" value="<?php echo $ruaAluno; ?> "class="form-control">
        </div>        

        <div class="form-group col-sm-4">
          <label class="fw">Bairro:</label>
          <input type="text" name="bairroAluno" value="<?php echo $bairroAluno; ?>" class="form-control">
        </div>

        
        <div class="form-group col-sm-2">
          <label class="fw">Complemento:</label>
          <input type="text" name="complementoAluno" value="<?php echo $complementoAluno; ?>" class="form-control">
        </div>

        </div>
        
        <div class="row">
        <div class="form-group col-sm-6">
          <label class="fw">Email:</label>
          <input type="email" name="emailAluno"  value="<?php echo $emailAluno; ?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Turma do Aluno:</label>
          <input type="text" name="turmaAluno"  value="<?php echo $turmaAluno; ?>" class="form-control">
        </div>

        </div>

        <br>

        <?php if(isset($_GET['editar'])):?>
          <button class="btn btn-primary" type="submit" name="atualizar" value="atualizar">Atualizar</button>
        <?php else : ?>
          <button class="btn btn-primary" type="submit" name="cadastrar" value="cadastrar">Salvar</button>
        <?php endif; ?>

        <input class="btn btn-primary" type="reset" value="Limpar">
        <a class="btn btn-primary" href="TelaPesquisaAluno.php" role="button">Pesquisar</a>
        
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