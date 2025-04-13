<?php

class Alien
{
    protected string $nome;
    protected string $imagem;
    protected string $dica;
    protected string $imagemB;

    public function __construct($n,$i,$d,$iB)
    {
        $this->nome=$n;
        $this->imagem=$i;
        $this->dica=$d;
        $this->imagemB=$iB;
    }

    public function __toString()
    {
        return "Arrumar depois fazer com HTML";
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