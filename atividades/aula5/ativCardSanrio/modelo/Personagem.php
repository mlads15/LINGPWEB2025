<?php

class Personagem {

    private string $nomePersonagem;
    private string $caracPersonagem;
    private string $personalidade;
    private string $imgPersonagem;

    public function __construct($nP, $c, $p, $img) {

        $this->nomePersonagem = $nP;
        $this->caracPersonagem = $c;
        $this->personalidade = $p;
        $this->imgPersonagem = $img;
        
    }

        public function __toString() {

        return "<div class='formulario'>" . "<img src='imagens/" . $this->imgPersonagem . "' />" . $this->PersonagemFav($this->nomePersonagem).";'<br><div class='infos'><hr><b>Nome: </b>". $this->nomePersonagem . "<br><br><b>Características: </b>". $this->caracPersonagem . "<br><br><b>Personalidade: </b>". $this->personalidade . "</div></div><br>";

    }

    public function PersonagemFav($resposta) {

        if($resposta == "Hello Kitty") {

            return "<img src='imagens/hellOkitty.jpeg'/>";

        } elseif($resposta == "Kuromi") {

            return "<img src='imagens/kuromii.jpeg'/>";

        } elseif($resposta == "My Melody") {

            return "<img src='imagens/mymelody.jpeg'/>";

        } elseif($resposta == "Cinnamoroll") {

            return "<img src='imagens/cinnamoroll.jpeg'/>";

        } elseif($resposta == "Pompompurin"){

            return "<img src='imagens/pompompurinn.jpeg'/>";

        } elseif($resposta == "Keroppi") {

            return "<img src='imagens/keroppi.jpeg'/>";

        } elseif ($resposta == "Badtz-maru" || "Badtz Maru") {

            return "<img src='imagens/badtzmaru.jpeg'/>";

        } else {

            echo "Personagem não incluso no cadastro.";

        }

    }

    public function getNomePersonagem(): string {
        return $this->nomePersonagem;
    }

    public function setNomePersonagem(string $nomePersonagem): self {
        $this->nomePersonagem = $nomePersonagem;

        return $this;
    }

    public function getCaracPersonagem(): string {
        return $this->caracPersonagem;
    }

    public function setCaracPersonagem(string $caracPersonagem): self {
        $this->caracPersonagem = $caracPersonagem;

        return $this;
    }

    public function getPersonalidade(): string {
        return $this->personalidade;
    }

    public function setPersonalidade(string $personalidade): self {
        $this->personalidade = $personalidade;

        return $this;
    }

    public function getImgPersonagem(): string {
        return $this->imgPersonagem;
    }

    public function setImgPersonagem(string $imgPersonagem): self {
        $this->imgPersonagem = $imgPersonagem;

        return $this;
    }
}