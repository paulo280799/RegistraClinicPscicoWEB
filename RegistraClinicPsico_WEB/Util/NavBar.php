<?php
session_start();

if (!isset($_SESSION['idUsuario'])) {
  header("Location: ../Autenticacao/DeslogarUsuario.php");
}
?>
<link rel="stylesheet" href="../css/styleMenu.css">
<!---- MENU PRINCIPAL  ---->
<nav class="navbar navbar-expand-lg navbar-light" id="nav-menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#abrirMenuResponsivo" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="barra-menu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="abrirMenuResponsivo">
    <img src="../Util/Imagens/LogoPsico.png" alt="logo" class="logo-menu">
    <a class="navbar-brand" href="#" id="nome-logo" style="margin-left:10px;">Registra Clinic Psico</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-opcoes">
      <li class="nav-item active" id="items-li">
        <a class="nav-link" href="Index.php" id="items-a">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" id="items-li">
        <a class="nav-link" id="items-a">Cadastro<span class="sr-only">(current)</span></a>
        <ul class="sub-menu">
          <li class="sub-menu-li"><a href="TelaPaciente.php">Paciente</a></li>
          <li class="sub-menu-li"><a href="TelaSupervisor.php">Supervisor</a></li>
          <li class="sub-menu-li"><a href="TelaUsuario.php">Usuario</a></li>
          <li class="sub-menu-li"><a href="TelaAluno.php">Aluno</a></li>
        </ul>
      </li>
      <li class="nav-item active" id="items-li">
        <a class="nav-link" id="items-a">Vínculo</a>
        <ul class="sub-menu">
          <li class="sub-menu-li"><a href="../telas/TelaAlunoSupervisor.php">Aluno - Supervisor</a></li>
          <li class="sub-menu-li"><a href="../telas/TelaAlunoPaciente.php">Aluno - Paciente</a></li>
        </ul>
      </li>
      <li class="nav-item active" id="items-li">
      </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav" id="menu-logado">
      <li class="nav-item">
        <span><?php echo "Bem Vindo | " . $_SESSION['nomeUsuario']; ?></span>
      </li>
      <li class="nav-item">
      </li>
    </ul>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-opcoes">
      <li class="nav-item" id="items-li">
        <a class="nav-link" href="../Autenticacao/DeslogarUsuario.php" id="items-a">Sair <span class="glyphicon glyphicon-log-out"></span></a>
      </li>
    </ul>
  </div>
</nav>
<!---------------- FIM MENU PRINCIPAL  ------------>