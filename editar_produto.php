<?php include "cabecalho.php"; ?>
<?php
if ( isset($_GET["Id"]) && !empty($_GET['Id']) )
{
    include "conexao.php";
    $sql = "Select Id, Descricao, Valor, Codigo_Barras from produtos where Id = $_GET[Id]";
    $resultado =$conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows> 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $Id = $row['Id'];
                $Descricao = $row['Descricao'];
                $Valor = $row['Valor'];
                $Codigo_Barras = $row['Codigo_Barras'];

            }
        }
        else
        {
            header('location: produtos.php');    
        }
    
        
    } 
    else
    {
        header('location: produtos.php');    
    }
    
} 
else
{
    header('location: produtos.php');
}

?>



<form action="editar_produto.php" method="post">
<input name="Id" value="<?php echo $Id?>"/>       
<input name="descricao" value="<?php echo $Descricao?>"/>    
<input name="valor" value="<?php echo $Valor?>"/>   
<input name="Codigo_Barras" value="<?php echo $Codigo_Barras?>"/>   
<button type="submit">
    Salvar Alterações
</button>
</form>


<?php include "rodape.php"; ?>