<?php include "cabecalho.php";?>
<h2> exercicio 1 </h2>
<?php
$numero1 = 10;
$numero2 = 5;
$operacao ="/";
if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
    echo "A soma de $numero1 e $numero2 é: $resultado";
} else if ($operacao == "-") {
    $resultado = $numero1 - $numero2;
    echo "A subtração de $numero1 e $numero2 é: $resultado";
} else if ($operacao == "x") {
    $resultado = $numero1 * $numero2;
    echo "A multiplicação de $numero1 e $numero2 é: $resultado";
} else if ($operacao == "/") {
    if ($numero2 != 0) { 
        $resultado = $numero1 / $numero2;
        echo "A divisão de $numero1 por $numero2 é: $resultado";
    } else {
        echo "Erro: Divisão por zero não é permitida.";
    }
} else {
    echo "Operação inválida. Use soma, subtração, multiplicação ou divisão.";
}
?>
    <h2> exercicio 2 </h2>
<?php
$anoNascimento = 1997;
$anoAtual = 2024;
$idade;

$idade = $anoAtual-$anoNascimento;
echo "A idade é $idade";

?>
<h2> Exercicio 3 </h2>
<?php
$temperaturaCelsius = 12;
$fahrenheit;
$fahrenheit = ($temperaturaCelsius * 9/5) +32;
echo "A temperatura convertida em fahrenheit é $fahrenheit";
?>

<h2> Exercicio 4 </h2>
<?php
$numero = 27;

if ($numero % 2 ==0)
{
    echo "O número é par";
}else 
{
    echo " O numero é impar";

}
?>
<h2> Exercicio 5 </h2>
<?php
$idade = 28;

if ($idade <=12) {
 echo "A faixa etária é de uma criança.";
}elseif ($idade>=13 && $idade<=17){
 echo "A faixa etária é de um adolescente.";
}elseif ($idade>=18 && $idade<=64){
 echo "A faixa etária é de um adulto.";
}else 
{
    echo "A faixa etária é de um idoso.";
}
?>
    <h2> Exercicio 6 </h2>
    <?php
    $numero = 0;
    if ($numero >0){
        echo "O número é positivo.";
    }
    elseif ($numero <0){
        echo "O número é negativo. ";
    }
    else {
        echo "O número é zero";
    }
    ?>
    
    <h2> Exercicio 7 </h2>
    <?php 
    $nota = 8;
    if ($nota =90 && $nota <=100){
        echo "Nota - A ";
    }
    elseif ($nota >=80 && $nota <=89){
        echo "Nota - B ";
    }
    elseif ($nota >=70 && $nota <=79){
        echo "Nota - C ";
    }
    elseif ($nota >=60 && $nota <=69){
        echo "Nota - D ";
    }
    else ($nota <60){
        echo "Nota - F ";
    }
    ?>

    <h2> Exercicio 8 </h2>
    <?php 
    $ano = 2024;
    if ($ano % 400 == 0){
        echo "$ano É um ano bissexto. ";
    }
    elseif ($ano % 4 == 0 && $ano % 100 != 0){
        echo "$ano É um ano bissexto. ";
    }
    else {
        echo "$ano Não é um ano bissexto. ";
    }
    ?>
    <h2> Exercicio 9 </h2>
    <?php 
    $senha = "senha123";
    $comprimento_minimo = 10;
    if(strlen($senha) >= $comprimento_minimo){
        echo "A senha contem o comprimento mínimo obrigatório. "
    }
    else{
        echo "A senha não atende ao tamanho mínimo. Ela deve conter pelo menos $comprimen_minimo caracteres. "
    }

    ?>
    <?php include "rodape.php"; ?>

    <h2>Exercício 10: Contagem com While</h2>
<?php
$contador = 1;
while ($contador <= 10) {
    echo $contador . "\n";
    $contador++;  
}
?>
<h2>Exercício 11: Soma de Números com while</h2>
<?php
$soma = 0;
$numero = 1;
while($numero <= 100){
    $soma += $numero;
    $numero++;
}
    echo "A soma dos números de 1 a 100 é: $soma ";
?>
<h2>Exercício 12: Tabuada com For</h2>
<?php
$tabuada = 5;
$resultado;
for($i = 0 ; $i <= 10 ; $i++){
    $resultado = $tabuada * $i;
    echo "$tabuada X $i = $resultado<br>";
}
?>
<h2>Exercício 13: Fatorial com For</h2>
<?php
$numero = 5;
$fatorial = 1;
 for ($i = 1; $i <= $numero; $i++) {
     $fatorial *= $i;
}
    echo "O fatorial de $numero é: $fatorial";
?>
<h2>Exercício 14: Números Pares com For</h2>
<?php
 for ($i = 2; $i <= 50; $i += 2) {
    if($i % 2 == 0){
        echo $i . "\n";
    }  
}
?>