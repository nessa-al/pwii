<h2 style="color: darkblue;">Exercício 1: Varíaveis e Tipos de Dados </h2>
<?php 
$nome = "Vanessa";
$idade = 27;
 echo "Meu nome é $nome e tenho $idade anos."
?>
<h2 style="color: green;">Exercício 2: Estruturas de Controle </h2>
<?php 
$numero = rand(54,185);
if($numero %2 == 0){
    echo "O numero é par.";
}else {
    echo "O numero $numero é impar.";
}


?>
<h2 style="color: purple;">Exercício 3: Laços de Repetição </h2>
<?php


for ($numero = 584; $numero <= 1970; $numero++) {
    echo "Número: $numero<br>";


    if ($numero % 2 == 0) {
        echo "O número $numero é par.<br>";
    } else {
        echo "O número $numero é ímpar.<br>";
    }
}
?>
<h2 style="color: red;">Exercício 4: Arrays </h2>
<?php
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"] ;
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
$cliente1 = [
    "nome" => "João",
    "telefone" => "1234-5678",
    "cep" => "12345-678"
];
$cliente2 = [
    "nome" => "Maria",
    "telefone" => "9876-5432",
    "cep" => "87654-321"
];
$cliente3 = [
    "nome" => "Carlos",
    "telefone" => "1111-2222",
    "cep" => "22222-111"
];
$cliente4 = [
    "nome" => "Ana",
    "telefone" => "3333-4444",
    "cep" => "44444-333"
];
$clientes = [$cliente1, $cliente2, $cliente3, $cliente4];
foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente["nome"] . ", Telefone: " . $cliente["telefone"] . ", CEP: " . $cliente["cep"] . "<br>";
}
?>