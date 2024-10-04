<?php include "cabecalho.php"; ?>

<?php
if(isset ($_POST["nome"]))
{
    if(empty($_POST["nome"]))
    
     echo "<br><div class='alert alert-danger'>
          Campo Nome não pode estar em branco</div>";
    }
    
    else if(isset ($_POST["valor"]))
    {
        if(empty($_POST["valor"]))
        {
            echo "<br><div class='alert alert-danger'>
                Campo Valor não pode estar em branco</div>";
        }
        else if(isset ($_POST["codigobarras"]))
        {
            if(empty($_POST["codigobarras"]))
            {
                echo "<br><div class='alert alert-danger'>
                        Campo Codigo de barras não pode estar em branco</div>";
            }
        }
        else if(isset ($_POST["datavalidade"]))
        {
            if(empty($_POST["datavalidade"]))
            {
            
            echo "<br><div class='alert alert-danger'>
                Campo Data de Validade não pode estar em branco</div>";
            }
        }
    else{
        //banco
        include "conexao.php";
        $nome = $_POST["nome"];
        $valor =  str_replace("," , ".", $_POST["valor"]);
        $codigobarras = $_POST["codigobarras"];

        $query = "INSERT into produtos (DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO) 
                   VALUES ('$nome', $valor , '$codigobarras', 1 ) ";
                   $resultado = $conexao->query($query);
                   if($resultado)

       echo "<h1> Salvo no banco com sucesso </h1>";
    }

}
?>

<form action = "novo_produto.php" method= "post">
   <label>Nome</label>
   <input type="text" name="nome"/>
<br>
<label>Valor</label>
   <input type="number" name="valor"/>
<br>
<label>Codigo de barras </label>
   <input type="text" name="codigobarras"/>
<br>
<label>Data de validade </label>
   <input type="date" name="datavalidade"/>
<br>
<button type='submit' class='btn btn-success'>
     Enviar os dados
</button>
</form>

<?php include "rodape.php"; ?>