<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Paciente!</title>
</head>
<body>
  <?php include_once '../Util/NavBar.php'; ?>

  <br>
  <br>
  <br>

  <div class="container">
    <form action="../Paciente/CadastroPaciente.php" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro de Paciente</legend>
        
        <div class="form-group">
          <label id="nomePaciente" class="fw">Nome:</label>
          <input type="text" name="nomePaciente" class="form-control" id="nomePaciente">
        </div>

        <div class="form-group">
          <label id="idadePaciente" class="fw">Idade:</label>
          <input type="text" name="idadePaciente" class="form-control" id="idadePaciente">
        </div>

        <div class="form-group">
          <label id="cpfPaciente" class="fw">CPF:</label>
          <input type="text" name="cpfPaciente" class="form-control" id="cpfPaciente">
        </div>

        <div class="form-group">
          <label id="rgPaciente" class="fw">RG:</label>
          <input type="text" name="rgPaciente" class="form-control" id="rgPaciente">
        </div>

        <div class="form-group">
          <label style="margin-right: 5px;" class="fw">Sexo:</label>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexo" value="M" id="masc" >
            <label class="form-check-input" for="masc">Masculino</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="sexo" value="F" id="femi">
            <label class="form-check-input" for="femi">Feminino</label>
          </div>
        </div>

        <div class="form-group">
          <label id="telefone" class="fw">Telefone:</label>
          <input type="text" name="telefone" class="form-control" id="telefone" >
        </div>

        <div class="form-group">
          <label id="telefoneOpcional" class="fw">Telefone Opcional:</label>
          <input type="text" name="telefoneOpcional" class="form-control" id="telefoneOpcional">
        </div>

        <div class="form-group">
          <label style="margin-right: 5px;" class="fw">Estado Civil:</label>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="estadoCivil" value="C" id="Casado">
            <label class="form-check-input" for="masc">Casado(a)</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="estadoCivil" value="S" id="Solteiro">
            <label class="form-check-input" for="femi">Solteiro(a)</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="estadoCivil" value="V" id="Viuvo">
            <label class="form-check-input" for="femi">Viuvo(a)</label>
          </div>
          <div class="form-group form-check-inline">
            <input type="radio" class="form-check-input" name="estadoCivil" value="A" id="Amancebado">
            <label class="form-check-input" for="femi">Amancebado(a)</label>
          </div>
        </div>

        <div class="form-group">
          <label id="cidade" class="fw">Cidade:</label>
          <input type="text" name="cidade" class="form-control" id="cidade" >
        </div>

        <div class="form-group">
          <label id="bairro" class="fw">Bairro:</label>
          <input type="text" name="bairro" class="form-control" id="bairro">
        </div>

        <div class="form-group">
          <label id="rua" class="fw">Rua:</label>
          <input type="text" name="rua" class="form-control" id="rua" >
        </div>

        <div class="form-group">
          <label id="numCasa" class="fw">Numero da casa:</label>
          <input type="text" name="numCasa" class="form-control" id="numCasa" >
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Responsável:</label>
          <input type="text" name="responsavel" class="form-control" id="responsavel" >
        </div>

        <div class="form-group">
          <label id="situacao" class="fw">Situação:</label>
          <input type="text" name="situacao" class="form-control" id="situacao" >
        </div>

        <div class="form-group">
          <label id="tipoPaciente" class="fw">Tipo de Paciente:</label>
          <input type="text" name="tipoPaciente" class="form-control" id="tipoPaciente" >
        </div>

        <div class="form-group">
          <label id="queixaPrincipal" class="fw">Queixa Principal:</label>
          <input type="text" name="queixaPrincipal" class="form-control" id="queixaPrincipal" >
        </div>

        <div class="form-group">
          <label id="disponibilidade" class="fw">Disponibilidade:</label>
          <input type="text" name="disponibilidade" class="form-control" id="disponibilidade" >
        </div>

        <div class="form-group">
          <label id="setorEncaminhado" class="fw">Setor de encaminhamento:</label>
          <input type="text" name="setorEncaminhado" class="form-control" id="setorEncaminhado" >
        </div>

        <div class="form-group">
          <label id="contrareferencia" class="fw">Contra Referencia:</label>
          <input type="text" name="contrareferencia" class="form-control" id="contrareferencia" >
        </div>

        <div class="form-group">
          <label id="outros" class="fw">Outros:</label>
          <input type="text" name="outros" class="form-control" id="outros" >
        </div>

        <br>
        <br>
        <br>

        <button type="submit" value="cadastrar" class="btn btn-outline-success">ENVIAR</button>
        <button type="submit" class="btn btn-outline-success">LIMPAR</button>
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