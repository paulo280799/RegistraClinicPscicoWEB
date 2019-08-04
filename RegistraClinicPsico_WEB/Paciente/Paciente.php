<?php  

class Paciente{

    private $idPaciente;

	private $nomePaciente;
	private $idadePaciente;
	private $cpfPaciete;
	private $rgPaciente;
	private $sexoPaciente;
	private $telefonePaciente;
	private $telefoneOpcionalPaciente;
    private $estadoCivil;

	private $cidadePaciente;
	private $bairroPaciente;
	private $ruaPaciente;
	private $endereco;

	private $responsavel;
	private $situaçãoPaciente;
	private $tipoPaciente;
	private $queixaPricipal;
	private $disponibilidade;
	private $setorDeEncaminhamento;
	private $contrarreferencia;
	private $outros;

    function setIDPaciente($IdPaciente){$this->idPaciente = $IdPaciente;}
    function getIDPaciente(){return $this->idPaciente;}

 	function setNome($NomePaciente){$this->nomePaciente = $NomePaciente;}
    function getNome(){return $this->nomePaciente;}
    
    function setDataNasc($IdadePaciente){$this->idadePaciente = $IdadePaciente;}
    function getDataNasc(){return $this->idadePaciente;}

    function setCpf($CPFPaciente){$this->cpfPaciete = $CPFPaciente;}
    function getCpf(){return $this->cpfPaciete;}
    
    function setRg($RGPaciente){$this->rgPaciente = $RGPaciente;}
    function getRg(){return $this->rgPaciente;}

    function setSexo($SexoPaciente){$this->sexoPaciente = $SexoPaciente;}
    function getSexo(){return $this->sexoPaciente;}

    function setTelefone($Telefone){$this->telefonePaciente = $Telefone;}
    function getTelefone(){return $this->telefonePaciente;}
    
    function setTelefoneOpcional($TelefoneOpcional){$this->telefoneOpcionalPaciente = $TelefoneOpcional;}
    function getTelefoneOpcional(){return $this->telefoneOpcionalPaciente;}

    function setEstadoCivil($EstadoCivil){$this->estadoCivil = $EstadoCivil;}
    function getEstadoCivil(){return $this->estadoCivil;}

   
    function setCidade($cidade){$this->cidadePaciente = $cidade;}
    function getCidade(){return $this->cidadePaciente;}

 	function setBairro($bairro){$this->bairroPaciente = $bairro;}
    function getBairro(){return $this->bairroPaciente;}

 	function setRua($rua){$this->ruaPaciente = $rua;}
    function getRua(){return $this->ruaPaciente;}

    function setEndereco($endereco){$this->endereco = $endereco;}
    function getEndereco(){return $this->endereco;}


    function setResponsavel($Responsavel){$this->responsavel = $Responsavel;}
    function getResponsavel(){return $this->responsavel;}

    function setSituacaoPaciente($SituacaoPaciente){$this->situaçãoPaciente = $SituacaoPaciente;}
    function getSituacaoPaciente(){return $this->situaçãoPaciente;}

    function setTipoPaciente($TipoPaciente){$this->tipoPaciente = $TipoPaciente;}
    function getTipoPaciente(){return $this->tipoPaciente;}

    function setQueixa($QUEIXA){$this->queixaPricipal = $QUEIXA;}
    function getQueixa(){return $this->queixaPricipal;}

    function setDisponibilidade($Disponibilidade){$this->disponibilidade = $Disponibilidade;}
    function getDisponibilidade(){return $this->disponibilidade;}

    function setSetorEncaminhamento($SetorEncaminhamento){$this->setorDeEncaminhamento = $SetorEncaminhamento;}
    function getSetorEncaminhamento(){return $this->setorDeEncaminhamento;}

    function setContraReferencia($Contrareferencia){$this->contrarreferencia = $Contrareferencia;}
    function getContraReferencia(){return $this->contrarreferencia;}

    function setOutros($Outros){$this->outros = $Outros;}
    function getOutros(){return $this->outros;}  
}
?>