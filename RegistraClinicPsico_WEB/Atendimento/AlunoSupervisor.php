<?php  

class AlunoSupervisor{

    private $idVincularAlunosSupervisor;
    private $dataInicioSupervisao;
    private $aluno_idAluno;
    private $supervisor_idSupervisor;

   
    function setIdVincularAlunoSupervisor($IdVincularAlunosSupervisor){$this->idVincularAlunoSupervisor = $IdVincularAlunosSupervisor;}
    function getIdVincularAlunoSupervisor(){return $this->idVincularAlunoSupervisor;}

    function setDataInicioSupervisao($DataInicioSupervisao){$this->dataInicioSupervisao = $DataInicioSupervisao;}
    function getDataInicioSupervisao(){return $this->dataInicioSupervisao;}

    function setAluno_idAluno($Aluno_idAluno){$this->aluno_idAluno = $Aluno_idAluno;}
    function getAluno_idAluno(){return $this->aluno_idAluno;}

    function setSupervisor_idSupervisor($Supervisor_idSupervisor){$this->supervisor_idSupervisor = $Supervisor_idSupervisor;}
    function getSupervisor_idSupervisor(){return $this->supervisor_idSupervisor;}
       
}
