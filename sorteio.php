<?php include "cabecalho.php";?>
<?php  
$sorteio = array("JONAS SILVA JATOBA", "MARCOS VINÍCIUS SANCHES CARDOSO","MARIANA DOS SANTOS",
"MATHEUS MARQUEZIM GENEBRA","RAFAEL TSUTAI MASSAKI",       
"REBÉCA RODRIGUES DE OLIVEIRA","RODOLFO LEONARDO ROMO","RODRIGO MIRANDA DOS SANTOS",      
"SARAH VITÓRIA PEDROSO DA SILVA","TAYNA ADRIANA DA SILVA","VANESSA ALVARES BERNARDO",        
"VINICIUS GABRIEL GONÇALVES DOS SANTOS","VITOR TAKAYUKI HIROTOMI","WYLLIAM DOS SANTOS FLORENTINO") ;


$contagem = count($sorteio);
$sorteioaleatorio =rand(0, $contagem -1);
$vencedor = $sorteio [$sorteioaleatorio];
?>

<?php
echo "<h1>";
echo "O VENCEDOR É:  ". $vencedor;
echo"</h1>"; 
?>




<?php include "rodape.php"; ?>
