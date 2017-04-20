<?php

class CalculadoraDeSalario {

    public function calcula(Funcionario $funcionario) {

        if($funcionario->getCargo() instanceof Desenvolvedor) {
            return $this->dezOuVintePorcento($funcionario);
        }
        else if($funcionario->getCargo() instanceof Tester || $funcionario->getCargo() instanceof Dba) {
            return $this->quinzeOuVinteCincoPorcento($funcionario);
        }

    }

    private function dezOuVintePorcento(Funcionario $funcionario) {

        if($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }

        return $funcionario->getSalario() * 0.9;
    }

    private function quinzeOuVinteCincoPorcento(Funcionario $funcionario) {

        if($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }

        return $funcionario->getSalario() * 0.85;

    }

}

class Cargo {

}

class Desenvolvedor extends Cargo {

}
class Tester extends Cargo {

}
class Dba extends Cargo {

}

class Funcionario {

    private $id;
    private $nome;
    private $cargo;
    private $dataAdmisao;
    private $salario;

    public function __construct(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getDataAdmisao() {
        return $this->dataAdmisao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function setCargo(Cargo $cargo) {
        $this->cargo = $cargo;
    }
    public function setDataAdmisao(DateTime $data) {
        $this->dataAdmisao = $data;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
