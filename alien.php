<?php

require_once('model/Alien.php');

$aliens = [
    new Alien(1,"Chama", "imagens/cartinhaChama.jpeg", "Alien de fogo", "imagens/cartinhaChamaBorrado.png"),
    new Alien(2,"XLR8", "imagens/cartinhaXlr8.jpg", "Alien veloz", "imagens/cartinhaXlr8Borrado.png"),
    new Alien(3,"UltraT", "imagens/cartinhaUltraT.jpg", "Alien transmorfo", "imagens/cartinhaUltraTBorrada.png")
];

$html = "<html><head><meta charset='UTF-8'><title>Jogo de adivinhação - Aliens</title><link href='style.css' rel='stylesheet'></head><body><div class='divAll'>";

if (!isset($_GET['palpite'])) 
{
    $html .= "<div class='divEscolha'><h2>Você deve escolher um número de 1 à 3 na URL<br>(após o .php, insira '?palpite=x' (sendo x o seu palpite))</h2></div>";
}

$html .= jogoAlien($aliens, sortearPalpite($aliens), $_GET['palpite'] ?? null);
$html .=  "</div></body></html>";

print $html;

function sortearPalpite($array) 
{
    $numeroPalpite = rand(0, count($array) - 1);
    return $numeroPalpite;
}

function jogoAlien($aliens, $numeroPalpite, $palpite)
{
    $html = "<div class='resultado'>";

    if (isset($_GET['palpite'])) 
    {
        $palpite = $_GET['palpite'];

        if ($palpite !== "" && $palpite == $numeroPalpite) 
        {
            $html .= "<h1 class='mensagemAcerto'>Parabéns! Você acertou o Palpite!</h1>";
            $html .= $aliens[$numeroPalpite];
        }
        elseif ($palpite !== "" && $palpite != $numeroPalpite) 
        {
            $html .= "<h1 class='mensagemErro'>Não foi dessa vez! Esse era o palpite correto!</h1>";
            $html .= $aliens[$numeroPalpite]->ChuteIncorreto();
        }
        else
        {
            $html .= "<p>Insira o palpite na URL</p>"; 
        }  
    }

    $html .= "</div>";
    return $html;
}