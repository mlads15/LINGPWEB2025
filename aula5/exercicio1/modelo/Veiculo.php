<?php

class Veiculo {

    private $modelo;
    private $marca;
    private $combustivel;

    

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): self {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca): self {
        $this->marca = $marca;

        return $this;
    }

    public function getCombustivel() {
        return $this->combustivel;
    }

    public function setCombustivel($combustivel): self {
        $this->combustivel = $combustivel;

        return $this;
    }

}