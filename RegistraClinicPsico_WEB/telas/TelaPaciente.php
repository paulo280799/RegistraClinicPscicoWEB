<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Paciente!</title>
</head>
<body>
  <?php include_once '../Util/NavBar.php'; ?>

  <?php require_once '../Paciente/EditarPaciente.php'; ?>

  <div class="container">

    <?php if(isset($_GET['editar'])):?>
    <form action="../Paciente/EditarPaciente.php" method="post">
    <?php else: ?>
    <form action="../Paciente/CadastroPaciente.php" method="post">
    <?php endif; ?>

    <fieldset>
      <legend class="fw" style="text-align: center;">Cadastro de Paciente</legend>
      <input type="hidden" name="idPaciente" value="<?php echo $idPaciente; ?>" >

      <div class="row" >

        <div class="form-group col-sm-10">
          <label class="fw">Nome:</label>
          <input type="text" name="nomePaciente" value="<?php echo $nomePaciente; ?>" class="form-control" required>
        </div>

        <div class="form-group col-sm-2">
          <label class="fw">Idade:</label>
          <input type="number" name="idadePaciente" value="<?php echo $idadePaciente; ?>" class="form-control" required>
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">CPF:</label>
          <input type="text" name="cpfPaciente" value="<?php echo $cpfPaciente; ?>"  class="form-control" required>
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">RG:</label>
          <input type="text" name="rgPaciente" value="<?php echo $rgPaciente; ?>" class="form-control" required>
        </div>

        <div class="form-group col-sm-4">
          <label class="fw">Sexo Paciente:</label>
          <select name="sexoPaciente" class="form-control" required>
            <option value="<?php echo $sexoPaciente; ?>" ><?php echo $sexoPaciente; ?></option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
          </select>
        </div>

        <div class="form-group col-sm-6">
          <label  class="fw">Telefone:</label>
          <input type="text" name="telefonePaciente"  value="<?php echo $telefonePaciente; ?>" class="form-control" required>
        </div>

        <div class="form-group col-sm-6">
          <label  class="fw">Telefone Opcional:</label>
          <input type="text" name="telefoneOpcionalPaciente"  value="<?php echo $telefoneOpcionalPaciente; ?>" class="form-control" required>
        </div>
            
        <div class="form-group col-sm-4">
          <label  class="fw">Estado Civil:</label>
          <select name="estadoCivil" class="form-control" required>
            <option value="<?php echo $estadoCivil; ?>" ><?php echo $estadoCivil; ?></option>
            <option value="Solteiro">Solteiro(a)</option>
            <option value="Casado">Casado(a)</option>
            <option value="Outros">Outros</option>
          </select>
        </div>
        
        <div class="form-group col-sm-6">
          <label id="cidade" class="fw" >Cidade:</label>
          <input type="text" name="cidade"  class="form-control" value="<?php echo $cidadePaciente; ?>" required>
        </div>

        <div class="form-group col-sm-6">
          <label id="bairro" class="fw">Bairro:</label>
          <input type="text" name="bairro"  class="form-control" value="<?php echo $bairroPaciente; ?>" required>
        </div>

        <div class="form-group col-sm-6">
          <label id="rua" class="fw">Rua:</label>
          <input type="text" name="rua"  class="form-control" value="<?php echo $ruaPaciente; ?>" required>
        </div>

        <div class="form-group col-sm-6">
          <label id="numCasa" class="fw">Numero da casa:</label>
          <input type="text" name="numCasa"  class="form-control" value="<?php echo $endereco; ?>" required>
        </div>
                
        <div class="form-group col-sm-10">
          <label class="fw">Responsável:</label>
          <input type="text" name="responsavel"  class="form-control" value="<?php echo $responsavel; ?>" required>
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Situação:</label>
          <input type="text" name="situacao" class="form-control" value="<?php echo $situaçãoPaciente; ?>" required>
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">Tipo de Paciente:</label>
          <input type="text" name="tipoPaciente" class="form-control" value="<?php echo $tipoPaciente; ?>" required>
        </div>
      </div>
      <div class="form-group" >
          <label class="fw">Queixa Principal:</label>
          <input type="text" name="queixaPrincipal" class="form-control" value="<?php echo $queixaPricipal; ?>" required>
        </div>

        <div class="form-group" >
          <label class="fw">Disponibilidade:</label>
          <input type="text" name="disponibilidade" class="form-control" value="<?php echo $disponibilidade; ?>" required>
        </div>

        <div class="form-group" >
          <label class="fw">Setor de encaminhamento:</label>
          <input type="text" name="setorEncaminhado" class="form-control" value="<?php echo $setorDeEncaminhamento; ?>" required>
        </div>

        <div class="form-group" >
          <label  class="fw">Contra referencia:</label>
          <input type="text" name="contrareferencia" class="form-control" value="<?php echo $contrarreferencia; ?>" required>
        </div>

        <div class="form-group" >
          <label  class="fw">Outros:</label>
          <input type="text" name="outros" class="form-control" value="<?php echo $outros; ?>" required>
        </div>

        <br>

        <?php if(isset($_GET['editar'])):?>
          <button class="btn btn-primary" type="submit" name="atualizar" value="atualizar">Atualizar</button>
        <?php else : ?>
          <button class="btn btn-primary" type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
        <?php endif; ?>

        <input class="btn btn-primary" type="reset" value="Limpar">
        <a class="btn btn-primary" href="TelaPesquisaPaciente.php"  role="button">Pesquisar</a>

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