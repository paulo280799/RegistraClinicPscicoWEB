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
    <?php require_once '../Supervisor/EditarSupervisor.php'; ?>
  <br>
  <br>
  <br>

  <div class="container">
     <?php if(isset($_GET['editar'])):?>
    <form action="../Supervisor/EditarSupervisor.php" method="post">
    <?php else: ?>
    <form action="../Supervisor/CadastroSupervisor.php" method="post">
    <?php endif; ?>
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Supervisor</legend>
         <input type="hidden" name="idSupervisor" value="<?php echo $idSupervisor; ?>">
        <div class="row">
        <div class="form-group col-sm-8">
          <label class="fw">Nome:</label>
          <input type="text" name="nomeSupervisor" class="form-control" value="<?php echo $nomeSupervisor; ?>">
        </div>

        <div class="form-group col-sm-4">
          <label class="fw">CPF:</label>
          <input type="text" name="cpfSupervisor" class="form-control" value="<?php echo $cpfSupervisor; ?>">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">RG:</label>
          <input type="text" name="rgSupervisor" class="form-control" value="<?php echo $rgSupervisor; ?>">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Data de Nascimento:</label>
          <input type="date" name="dataNascimentoSupervisor" class="form-control" value="<?php echo $dataNascimentoSupervisor; ?>">
        </div>


        <div class="form-group col-sm-4">
          <label class="fw">Sexo Aluno:</label>
          <select name="sexoSupervisor" class="form-control">
            <option value="<?php echo $sexoSupervisor; ?>"><?php echo $sexoSupervisor; ?></option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
          </select>
        </div>

        <div class="form-group col-sm-6">
          <label  class="fw">Telefone:</label>
          <input type="text" name="telefoneSupervisor" class="form-control" value="<?php echo $telefoneSupervisor; ?>">
        </div>
        </div>

        <div class="row">        
        <div class="form-group col-sm-4">
          <label class="fw">Estado:</label>
          <input type="text" name="estadoSupervisor" class="form-control" value="<?php echo $estadoSupervisor; ?>">
        </div>

        <div class="form-group col-sm-4">
          <label class="fw">Cidade:</label>
          <input type="text" name="cidadeSupervisor" class="form-control" value="<?php echo $cidadeSupervisor; ?>">
        </div>

        <div class="form-group col-sm-4">
          <label class="fw">Bairro:</label>
          <input type="text" name="bairroSupervisor" class="form-control" value="<?php echo $bairroSupervisor; ?>">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Rua:</label>
          <input type="text" name="ruaSupervisor" class="form-control" value="<?php echo $ruaSupervisor; ?>">
        </div>

        <div class="form-group col-sm-4">
          <label class="fw">Numero da casa:</label>
          <input type="text" name="numCasaSupervisor" class="form-control" value="<?php echo $numCasaSupervisor; ?>">
        </div>

        <div class="form-group col-sm-2">
          <label class="fw">Complemento:</label>
          <input type="text" name="complementoSupervisor" class="form-control" value="<?php echo $complementoSupervisor; ?>">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Email:</label>
          <input type="text" name="emailSupervisor" class="form-control" value="<?php echo $emailSupervisor; ?>">
        </div>        

        <div class="form-group col-sm-6">
          <label class="fw">Turma do Supervisor:</label>
          <input type="text" name="turmaSupervisor" class="form-control" value="<?php echo $turmaSupervisor; ?>">
        </div>

        <div class="form-group col-sm-12">
          <label class="fw">Especialização:</label>
          <input type="text" name="especializacaoSupervisor" class="form-control" value="<?php echo $especializacaoSupervisor; ?>">
        </div>

        </div>
        <br>
        <br>
        <br>



         <?php if(isset($_GET['editar'])):?>
          <button 
            type="submit" name="atualizar" value="atualizar" class="btn btn-outline-primary"  
            style="background-color: #26619c; color: white;">
            Atualizar
          </button>
        <?php else : ?>
          <button 
            type="submit" name="cadastrar" value="cadastrar" class="btn btn-outline-success"
            style="background-color: #26619c; color: white;">
            Salvar
          </button>
        <?php endif; ?>
        <button type="reset" class="btn btn-outline-success">Limpar</button>
        <a href="TelaPesquisaSupervisor.php" class="btn btn-outline-success">Pesquisar</a>
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