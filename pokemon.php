<?php

require_once('model/Pokemon.php');

// objetos pokemon
$pokemons = [
    new Pokemon(1,"Bulbasaur", "imagens/cartinhaBulbasaur.png", "Pokémon tipo planta, inicial", "imagens/cartinhaBulbasaurBorrada.png"),
    new Pokemon(2,"Pikachu", "imagens/cartinhaPikachu.png", "Pokémon elétrico, segunda evolução", "imagens/cartinhaPikachuBorrada.png"),
    new Pokemon(3,"Charizard", "imagens/cartinhaCharizard.png", "Pokémon de fogo, evolução final", "imagens/cartinhaCharizardBorrada.png")
];

$html = "<html><head><meta charset='UTF-8'><title>Jogo de adivinhação - Pokémons</title><link href='style.css' rel='stylesheet'></head><body><div class='divAll'>";

if (!isset($_GET['palpite'])) 
{
    $html .= "<div class='divEscolha'><h2>Você deve escolher um número de 1 à 3 na URL<br>(após o .php, insira '?palpite=x' (sendo x o seu palpite))</h2></div>";
}

$html .= jogoPokemon($pokemons, sortearPalpite($pokemons), $_GET['palpite'] ?? null);
$html .=  "</div></body></html>";

print $html;

function sortearPalpite($array) 
{
    $numeroPalpite = rand(0, count($array) - 1);
    return $numeroPalpite;
}

function jogoPokemon($pokemons, $numeroPalpite, $palpite) //poderia fazer uma funcao so de jogo e colocar $pokemon e $aliens como array, mas preferi deixar separado bonitinho!
{
    $html = "<div class='resultado'>";

    if (isset($_GET['palpite'])) 
    {
        $palpite = $_GET['palpite'];

        if ($palpite !== "" && $palpite == $numeroPalpite) 
        {
            $html .= "<h1 class='mensagemAcerto'>Parabéns! Você acertou o Palpite!</h1>";
            $html .= $pokemons[$numeroPalpite];
        }
        elseif ($palpite !== "" && $palpite != $numeroPalpite) 
        {
            $html .= "<h1 class='mensagemErro'>Não foi dessa vez! Esse era o palpite correto!</h1>";
            $html .= $pokemons[$numeroPalpite]->ChuteIncorreto();
        }
        else
        {
            $html .= "<p>Insira o palpite na URL</p>"; 
        }  
    }

    $html .= "</div>";
    return $html;
}
