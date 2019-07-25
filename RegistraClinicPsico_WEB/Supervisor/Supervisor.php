<?php  

class Supervisor{

	private $nomeSupervisor;
	private $cpfSupervisor;
	private $rgSupervisor;
	private $telefoneSupervisor;
	private $dataNascimentoSupervisor;
	private $sexoSupervisor;
	

	private $estadoSupervisor;
	private $cidadeSupervisor;
	private $bairroSupervisor;
	private $ruaSupervisor;
	private $numCasaSupervisor;

	private $emailSupervisor;
	private $complementoSupervisor;
	private $turmaSupervisor;
	private $especializacaoSupervisor;

	function getNomeSupervisor(){return $this->nomeSupervisor;}
	function setNomeSupervisor($NomeSupervisor){$this->nomeSupervisor = $NomeSupervisor;}

	function getCPFSupervisor(){return $this->cpfSupervisor;}
	function setCPFSupervisor($CPFSupervisor){$this->cpfSupervisor = $CPFSupervisor;}

	function getRGSupervisor(){return $this->rgSupervisor;}
	function setRGSupervisor($RGSupervisor){$this->rgSupervisor = $RGSupervisor;}

	function getTelefoneSupervisor(){return $this->telefoneSupervisor;}
	function setTelefoneSupervisor($TelefoneSupervisor){$this->telefoneSupervisor = $TelefoneSupervisor;}

	function getDataNascimentoSupervisor(){return $this->dataNascimentoSupervisor;}
	function setDataNascimentoSupervisor($DataNascimentoSupervisor){$this->dataNascimentoSupervisor = $DataNascimentoSupervisor;}

	function getSexoSupervisor(){return $this->sexoSupervisor;}
	function setSexoSupervisor($SexoSupervisor){$this->sexoSupervisor = $SexoSupervisor;}

	function getEstadoSupervisor(){return $this->estadoSupervisor;}
	function setEstadoSupervisor($EstadoSupervisor){$this->estadoSupervisor = $EstadoSupervisor;}

	function getCidadeSupervisor(){return $this->cidadeSupervisor;}
	function setCidadeSupervisor($CidadeSupervisor){$this->cidadeSupervisor = $CidadeSupervisor;}

	function getBairroSupervisor(){return $this->bairroSupervisor;}
	function setBairroSupervisor($BairroSupervisor){$this->bairroSupervisor = $BairroSupervisor;}

	function getRuaSupervisor(){return $this->ruaSupervisor;}
	function setRuaSupervisor($RuaSupervisor){$this->ruaSupervisor = $RuaSupervisor;}

	function getNumCasaSupervisor(){return $this->numCasaSupervisor;}
	function setNumCasaSupervisor($NumCasaSupervisor){$this->numCasaSupervisor = $NumCasaSupervisor;}

	function getEmailSupervisor(){return $this->emailSupervisor;}
	function setEmailSupervisor($EmailSupervisor){$this->emailSupervisor = $EmailSupervisor;}

	function getComplementoSupervisor(){return $this->complementoSupervisor;}
	function setComplementoSupervisor($ComplementoSupervisor){$this->complementoSupervisor = $ComplementoSupervisor;}

	function getTurmaSupervisor(){return $this->turmaSupervisor;}
	function setTurmaSupervisor($TurmaSupervisor){$this->turmaSupervisor = $TurmaSupervisor;}

	function getEspecializacaoSupervisor(){return $this->especializacaoSupervisor;}
	function setEspecializacaoSupervisor($EspecializacaoSupervisor){$this->especializacaoSupervisor = $EspecializacaoSupervisor;}
}
?>