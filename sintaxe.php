<?php include "cabecalho.php";?>
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
</body>
</html>
<?php include "rodape.php"; ?>

