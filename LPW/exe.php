<?php

require_once("model/Pokemon.php");
require_once("model/Alien.php");

// objetos pokemon
$pokemons = [
    new Pokemon("Bulbasaur", "imagens/cartinhaBulbasaur.png", "Pokémon tipo planta, inicial", "imagens/cartinhaBulbasaurBorrada.png"),
    new Pokemon("Pikachu", "imagens/cartinhaPikachu.png", "Pokémon elétrico, segunda evolução", "imagens/cartinhaPikachuBorrada.png"),
    new Pokemon("Charizard", "imagens/cartinhaCharizard.png", "Pokémon de fogo, evolução final", "imagens/cartinhaCharizardBorrada.png")
];

//objetos alien
$aliens = [
    new Alien("Chama", "imagens/chama.png", "Alien de fogo", "imagens/chamaBorrado.png"),
    new Alien("XLR8", "imagens/xlr8", "Alien veloz", "imagens/xlr8Borrado"), // literalmente eu
    new Alien("UltraT", "imagens/ultraT", "Alien transmorfo", "imagens/ultraTBorrado")
];

print "<h1>Escolha (por meio da URL) qual classe deseja para realizar seu palpite:<br>1-Pokémons<br>2-Aliens (Ben10)</h1>";
if (isset($_GET['escolha'])) 
{
    $html = "<h1>Jogo muito legal de adivinhar</h1><br><h2>Escolha entre Pokémon ou Ben 10</h2><br><p><a href=''> 1 - Pokémon</a></p><br><p><a href=''> 2 - Ben 10</a></p>";
    print $html;
    //ver se passa por parametro direto na URL ou faz com ancora
    $escolha = $_GET['escolha'];
    if ($escolha == 1) 
    {
        $phtml = "<h1>Jogo dos Pokémons</h1>";
        print $phtml;
    }elseif ($escolha == 2) 
    {
        $ahtml = "<h1>Jogo dos Aliens</h1>";
        print $ahtml;
    }else
    {
        print "<p>Insira uma escolha válida</p>";
    }
}
