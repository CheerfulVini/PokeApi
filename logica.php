<?php

$nome = readLine("Informe um pokemon");

$dadosTexto = file_get_contents("https://pokeapi.co/api/v2/pokemon/{$nome}");
$pokemon = json_decode($dadosTexto, true);

print("\nnome: " . $pokemon['name']. "\n");
print("altura: ". $pokemon['height'] /10 . "m\n");
print("peso: ". $pokemon['weight'] /10 . "kg\n");
print("movimentos:\n ");

foreach($pokemon['moves'] as $move){
    print("- ". $move['move']['name']. "\n");
}
