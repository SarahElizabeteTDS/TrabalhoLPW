<?php

class Alien
{
    protected int $numeroPalpite;
    protected string $nome;
    protected string $imagem;
    protected string $dica;
    protected string $imagemB;

    public function __construct($np,$n,$i,$d,$iB)
    {
        $this->numeroPalpite = $np;
        $this->nome=$n;
        $this->imagem=$i;
        $this->dica=$d;
        $this->imagemB=$iB;
    }

    public function __toString()
    {
        return "<div class='cartaAlien'><img src='".$this->imagem."'><br><h2>Nome do Alien: ". $this->nome ."</h2><br><p>Essa era a dica para esse Alien: ". $this->dica ."</p></div>";
    }

    public function ChuteIncorreto()
    {
        return "<div class='cartaAlien'><img src='".$this->imagemB."'><br><h2>Nome do Alien: ??? </h2><br><p>Essa é a dica para esse Alien: ". $this->dica ."</p></div>";
    }

    public function getNumeroPalpite(): string
    {
        return $this->numeroPalpite;
    }

    public function setNumeroPalpite(int $numeroPalpite): self
    {
        $this->numeroPalpite = $numeroPalpite;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function getDica(): string
    {
        return $this->dica;
    }

    public function setDica(string $dica): self
    {
        $this->dica = $dica;

        return $this;
    }

    public function getImagemB(): string
    {
        return $this->imagemB;
    }

    public function setImagemB(string $imagemB): self
    {
        $this->imagemB = $imagemB;

        return $this;
    }
}