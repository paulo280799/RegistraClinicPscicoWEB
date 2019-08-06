<?php  

class Usuario{

	private $nomeUsuario;
	private $loginUsuario;
	private $senhaUsuario;
    private $nivelUsuario;
    
    private $idUsuario;
	
	function getNomeUsuario(){return $this->NomeUsuario;}
	function setNomeUsuario($nomeUsuario){$this->NomeUsuario = $nomeUsuario;}

	function getLoginUsuario(){return $this->LoginUsuario;}
	function setLoginUsuario($loginUsuario){$this->LoginUsuario = $loginUsuario;}

	function getSenhaUsuario(){return $this->SenhaUsuario;}
	function setSenhaUsuario($senhaUsuario){$this->SenhaUsuario = $senhaUsuario;}

	function getNivelUsuario(){return $this->NivelUsuario;}
    function setNivelUsuario($nivelUsuario){$this->NivelUsuario = $nivelUsuario;}
    
    function getIdUsuario(){return $this->IdUsuario;}
	function setIdUsuario($idUsuario){$this->IdUsuario = $idUsuario;}

}
?>