<?php

$testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit similique sint quas, laborum ad quibusdam cumque alias fugit vitae porro in fuga quos ex 
rerum voluptatum, assumenda corporis ullam autem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit similique sint quas, laborum ad quibusdam cumque alias 
fugit vitae porro in fuga quos ex rerum voluptatum, assumenda corporis ullam autem.';


$paragrafi = explode('.', $testo);

for ($i = 0; $i < count($paragrafi); $i++){
    echo "<p> $paragrafi[$i] </p>";
}