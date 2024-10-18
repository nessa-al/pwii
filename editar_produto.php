<?php include "cabecalho.php"; ?>
<?php
if ( isset($_POST["id"]) && !empty($_POST['id']) &&
    isset($_POST["descricao"]) && !empty($_POST['descricao']) &&
    isset($_POST["valor"]) && !empty($_POST['valor']) &&
    isset($_POST['codigo_barras']) && !empty($_POST['codigo_barras']) 

)

{
    include "conexao.php";
    $sql = "UPDATE PRODUTOS SET Descricao = '$_POST[descricao]',
                                Valor = '$_POST[valor]',
                                Codigo_Barras = '$_POST[codigo_barras]'
            WHERE Id = $_POST[id]";
           
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        //logica para mensagem de sucesso
    } 
    else
    {
       //caso o update de false
    }

                                
}


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
            header('location: produtos.php?erro= Nenhum registro encontrado');    
        }
    
        
    } 
    else
    {
        header('location: produtos.php?erro= Erro do if do resultado');    
    }
    
} 
else
{
    header('location: produtos.php?erro= Nenhum id informado');
}

?>



<form action="editar_produto.php?Id=<?php echo $Id; ?>" method="post">
<input name="id" value="<?php echo $Id?>"/>       
<input name="descricao" value="<?php echo $Descricao?>"/>    
<input name="valor" value="<?php echo $Valor?>"/>   
<input name="codigo_barras" value="<?php echo $Codigo_Barras?>"/>   
<button type="submit">
    Salvar Alterações
</button>
</form>


<?php include "rodape.php"; ?>