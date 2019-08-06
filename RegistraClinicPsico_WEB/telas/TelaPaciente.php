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

  <br>

  <div class="container">

    <?php if(isset($_GET['editar'])):?>
    <form action="../Paciente/EditarPaciente.php" method="post">
    <?php else: ?>
    <form action="../Paciente/CadastroPaciente.php" method="post">
    <?php endif; ?>
    
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Paciente</legend>
        <input type="hidden" name="idPaciente" value="<?php echo $idPaciente; ?>">
        <div class="row">
        <div class="form-group col-sm-10">
          <label id="nomePaciente" class="fw">Nome:</label>
          <input type="text" name="nomePaciente"  value="<?php echo $nomePaciente; ?> " class="form-control" id="nomePaciente">
        </div>

        <div class="form-group col-sm-2">
          <label id="idadePaciente" class="fw">Idade:</label>
          <input type="number" name="idadePaciente" value="<?php echo $idadePaciente; ?> "  class="form-control" id="idadePaciente">
        </div>

        <div class="form-group col-sm-6">
          <label id="cpfPaciente" class="fw">CPF:</label>
          <input type="text" name="cpfPaciente" value="<?php echo $cpfPaciente; ?> "  class="form-control" id="cpfPaciente">
        </div>

        <div class="form-group col-sm-6">
          <label id="rgPaciente" class="fw">RG:</label>
          <input type="text" name="rgPaciente"  value="<?php echo $rgPaciente; ?> " class="form-control" id="rgPaciente">
        </div>

       <div class="form-group col-sm-4">
          <label id="sexoPaciente" class="fw">Sexo Paciente:</label>
          <select name="sexoPaciente" class="form-control" id="sexoPaciente">
            <option value="<?php echo $sexoPaciente; ?>"><?php echo $sexoPaciente; ?></option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
          </select>
        </div>

        <div class="form-group col-sm-6">
          <label id="telefone" class="fw">Telefone:</label>
          <input type="text" name="telefone"  value="<?php echo $telefonePaciente; ?> " class="form-control" id="telefonePaciente" >
        </div>

        <div class="form-group col-sm-6">
          <label id="telefoneOpcional" class="fw">Telefone Opcional:</label>
          <input type="text" name="telefoneOpcional" value="<?php echo $telefoneOpcionalPaciente; ?> "  class="form-control" id="telefoneOpcionalPaciente">
        </div>
              
        <div class="form-group col-sm-4">
          <label id="estadoCivil" class="fw">Estado Civil:</label>
          <select name="estadoCivil" class="form-control" id="estadoCivil">
            <option value="<?php echo $estadoCivil; ?>"><?php echo $estadoCivil; ?></option>
            <option value="Solteiro">Solteiro(a)</option>
            <option value="Casado">Casado(a)</option>
            <option value="Outros">Outros</option>
          </select>
        </div>
          
        </div>

        </div>

        <div class="row" style="margin-left: 110px; margin-right: 120px;">
        <div class="form-group col-sm-6">
            <label id="cidade" class="fw" >Cidade:</label>
            <input type="text" name="cidade"  value="<?php echo $cidadePaciente; ?> " class="form-control" id="cidade" >
          </div>

          <div class="form-group col-sm-6">
            <label id="bairro" class="fw">Bairro:</label>
            <input type="text" name="bairro"  value="<?php echo $bairroPaciente; ?> " class="form-control" id="bairro">
          </div>

          <div class="form-group col-sm-6">
            <label id="rua" class="fw">Rua:</label>
            <input type="text" name="rua" value="<?php echo $ruaPaciente; ?> "  class="form-control" id="rua" >
          </div>

          <div class="form-group col-sm-6">
            <label id="numCasa" class="fw">Numero da casa:</label>
            <input type="text" name="numCasa"  value="<?php echo $endereco; ?> " class="form-control" id="numCasa" >
          </div>

        </div>        

        <div class="row"style="margin-left: 110px; margin-right: 120px;">
        <div class="form-group col-sm-10">
            <label id="nome" class="fw">Responsável:</label>
            <input type="text" name="responsavel"  value="<?php echo $responsavel; ?> " class="form-control" id="responsavel" >
          </div>

          <div class="form-group col-sm-6">
            <label id="situacao" class="fw">Situação:</label>
            <input type="text" name="situacao" value="<?php echo $situaçãoPaciente; ?> "  class="form-control" id="situacao" >
          </div>

          <div class="form-group col-sm-6">
            <label id="tipoPaciente" class="fw">Tipo de Paciente:</label>
            <input type="text" name="tipoPaciente"  value="<?php echo $tipoPaciente; ?> " class="form-control" id="tipoPaciente" >
          </div>
        </div>
          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label id="queixaPrincipal" class="fw">Queixa Principal:</label>
            <input type="text" name="queixaPrincipal"  value="<?php echo $queixaPricipal; ?> " class="form-control" id="queixaPrincipal" >
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label id="disponibilidade" class="fw">Disponibilidade:</label>
            <input type="text" name="disponibilidade" value="<?php echo $disponibilidade; ?> "  class="form-control" id="disponibilidade" >
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label id="setorEncaminhado" class="fw">Setor de encaminhamento:</label>
            <input type="text" name="setorEncaminhado"  value="<?php echo $setorDeEncaminhamento; ?> " class="form-control" id="setorEncaminhado" >
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label id="contrareferencia" class="fw">Contra Referencia:</label>
            <input type="text" name="contrareferencia" value="<?php echo $contrarreferencia; ?> "  class="form-control" id="contrareferencia" >
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label id="outros" class="fw">Outros:</label>
            <input type="text" name="outros"  value="<?php echo $outros; ?> " class="form-control" id="outros" >
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

        <button type="reset" class="btn btn-outline-success">LIMPAR</button>
        <a href="TelaPesquisaPaciente.php" class="btn btn-outline-success">Pesquisar</a>
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