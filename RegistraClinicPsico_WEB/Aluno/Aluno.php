<?php 

class Aluno{

	private $nomeAluno;
	private $matriculaAluno;
	private $cpfAluno;
	private $rgAluno;
	private $sexoAluno;
	private $telefoneAluno;
	private $dataNascimentoAluno;
	

	private $estadoAluno;
	private $cidadeAluno;
	private $bairroAluno;
	private $ruaAluno;
	private $numCasaAluno;

	private $emailAluno;
	private $complementoAluno;
	private $turmaAluno;

	function getNomeAluno(){return $this->nomeAluno;}
	function setNomeAluno($NomeAluno){$this->nomeAluno = $NomeAluno;}

	function getMatriculaAluno(){return $this->matriculaAluno;}
	function setMatriculaAluno($MatriculaAluno){$this->matriculaAluno =$MatriculaAluno;}

	function getCPFAluno(){return $this->cpfAluno;}
	function setCPFAluno($CPFAluno){$this->cpfAluno = $CPFAluno;}

	function getRGAluno(){return $this->rgAluno;}
	function setRGAluno($RGAluno){$this->rgAluno = $RGAluno;}

	function getTelefoneAluno(){return $this->telefoneAluno;}
	function setTelefoneAluno($TelefoneAluno){$this->telefoneAluno = $TelefoneAluno;}

	function getDataNascimentoAluno(){return $this->dataNascimentoAluno;}
	function setDataNascimentoAluno($DataNascimentoAluno){$this->dataNascimentoAluno = $DataNascimentoAluno;}

	function getSexoAluno(){return $this->sexoAluno;}
	function setSexoAluno($SexoAluno){$this->sexoAluno = $SexoAluno;}

	function getEstadoAluno(){return $this->estadoAluno;}
	function setEstadoAluno($EstadoAluno){$this->estadoAluno = $EstadoAluno;}

	function getCidadeAluno(){return $this->cidadeAluno;}
	function setCidadeAluno($CidadeAluno){$this->cidadeAluno = $CidadeAluno;}

	function getBairroAluno(){return $this->bairroAluno;}
	function setBairroAluno($BairroAluno){$this->bairroAluno = $BairroAluno;}

	function getRuaAluno(){return $this->ruaAluno;}
	function setRuaAluno($RuaAluno){$this->ruaAluno = $RuaAluno;}

	function getNumCasaAluno(){return $this->numCasaAluno;}
	function setNumCasaAluno($NumCasaAluno){$this->numCasaAluno = $NumCasaAluno;}

	function getEmailAluno(){return $this->emailAluno;}
	function setEmailAluno($EmailAluno){$this->emailAluno = $EmailAluno;}

	function getComplementoAluno(){return $this->complementoAluno;}
	function setComplementoAluno($ComplementoAluno){$this->complementoAluno = $ComplementoAluno;}

	function getTurmaAluno(){return $this->turmaAluno;}
	function setTurmaAluno($TurmaAluno){$this->turmaAluno = $TurmaAluno;}
}
?>
