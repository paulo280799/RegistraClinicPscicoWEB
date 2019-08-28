<?php  

class AlunoPaciente{

    private $idVincularPacienteAluno;
    private $dataInicioAtendimento;
    private $aluno_idAluno;
    private $paciente_idPaciente;

   
    function setIdVincularPacienteAluno($IdVincularPacienteAluno){$this->idVincularPacienteAluno = $IdVincularPacienteAluno;}
    function getIdVincularPacienteAluno(){return $this->idVincularPacienteAluno;}

    function setDataInicioAtendimento($DataInicioAtendimento){$this->dataInicioAtendimento = $DataInicioAtendimento;}
    function getDataInicioAtendimento(){return $this->dataInicioAtendimento;}

    function setAluno_idAluno($Aluno_idAluno){$this->aluno_idAluno = $Aluno_idAluno;}
    function getAluno_idAluno(){return $this->aluno_idAluno;}

    function setPaciente_idPaciente($Paciente_idPaciente){$this->paciente_idPaciente = $Paciente_idPaciente;}
    function getPaciente_idPaciente(){return $this->paciente_idPaciente;}
       
}
