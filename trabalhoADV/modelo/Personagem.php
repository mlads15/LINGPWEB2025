<?php

class Personagem {
    private $nome;
    private $imagem;
    private $dica;

    public function __construct($n, $img, $d) {
        $this->nome = $n;
        $this->imagem = $img;
        $this->dica = $d;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem): self {
        $this->imagem = $imagem;

        return $this;
    }

    public function getDica() {
        return $this->dica;
    }

    public function setDica($dica): self {
        $this->dica = $dica;

        return $this;
    }
}


