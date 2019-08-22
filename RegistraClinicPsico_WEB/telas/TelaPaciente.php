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
  

  <br>

  <div class="container">

    
    
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Paciente</legend>
        <div class="row" >
        <div class="form-group col-sm-10">
          <label class="fw">Nome:</label>
          <input type="text" name="nomePaciente" class="form-control">
        </div>

        <div class="form-group col-sm-2">
          <label class="fw">Idade:</label>
          <input type="number" name="idadePaciente" class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">CPF:</label>
          <input type="text" name="cpfPaciente"  class="form-control">
        </div>

        <div class="form-group col-sm-6">
          <label class="fw">RG:</label>
          <input type="text" name="rgPaciente"  class="form-control" >
        </div>

       <div class="form-group col-sm-4">
          <label class="fw">Sexo Paciente:</label>
          <select name="sexoPaciente" class="form-control" >
            <option ></option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outros">Outros</option>
          </select>
        </div>

        <div class="form-group col-sm-6">
          <label  class="fw">Telefone:</label>
          <input type="text" name="telefonePaciente" class="form-control" >
        </div>

        <div class="form-group col-sm-6">
          <label  class="fw">Telefone Opcional:</label>
          <input type="text" name="telefoneOpcionalPaciente" class="form-control" >
        </div>
              
        <div class="form-group col-sm-4">
          <label  class="fw">Estado Civil:</label>
          <select name="estadoCivil" class="form-control" >
            <option ></option>
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
            <input type="text" name="cidade"  class="form-control" id="cidade" >
          </div>

          <div class="form-group col-sm-6">
            <label id="bairro" class="fw">Bairro:</label>
            <input type="text" name="bairro"  class="form-control" id="bairro">
          </div>

          <div class="form-group col-sm-6">
            <label id="rua" class="fw">Rua:</label>
            <input type="text" name="rua"  class="form-control" id="rua" >
          </div>

          <div class="form-group col-sm-6">
            <label id="numCasa" class="fw">Numero da casa:</label>
            <input type="text" name="numCasa"  class="form-control" id="numCasa" >
          </div>

        </div>        

        <div class="row"style="margin-left: 110px; margin-right: 120px;">
        <div class="form-group col-sm-10">
            <label class="fw">Responsável:</label>
            <input type="text" name="responsavel"  class="form-control" >
          </div>

          <div class="form-group col-sm-6">
            <label class="fw">Situação:</label>
            <input type="text" name="situacao" class="form-control">
          </div>

          <div class="form-group col-sm-6">
            <label class="fw">Tipo de Paciente:</label>
            <input type="text" name="tipoPaciente" class="form-control" >
          </div>
        </div>
          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label class="fw">Queixa Principal:</label>
            <input type="text" name="queixaPrincipal" class="form-control">
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label class="fw">Disponibilidade:</label>
            <input type="text" name="disponibilidade" class="form-control" >
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label class="fw">Setor de encaminhamento:</label>
            <input type="text" name="setorEncaminhado" class="form-control">
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label  class="fw">Contra referencia:</label>
            <input type="text" name="contrareferencia" class="form-control" >
          </div>

          <div class="form-group" style="padding-left: 120px; padding-right: 120px;">
            <label  class="fw">Outros:</label>
            <input type="text" name="outros" class="form-control" >
          </div>

        <br>
        <br>
        <br>

         <div style="padding-left: 120px;">
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

        <button type="reset" class="btn btn-outline-success"
          style="background-color: #26619c; color: white;">
          Limpar
        </button>
        <a 
          href="TelaPesquisaPaciente.php" 
          class="btn btn-outline-success"
          style="background-color: #26619c; color: white;">
          Pesquisar
        </a>
         </div>
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