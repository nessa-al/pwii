<?php include "cabecalho.php"; ?>

<?php
if(isset($_GET["pesquisa"]))
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa))
    {
        //se a variavel estiver vazia executa aqui.
    }
    else
    {
        //logica do banco de dados. 
    }
}
else
{
    $pesquisa = "";
}
?>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista de Produtos
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-2"> 
                            <a href="novo_produto.php" class="btn btn-primary">
                                Novo Produto
                            </a>
                         </div>
                        <div class="col-8">
                            <form action="produtos.php" method="get">
                                <div class="input-group mb-3">
                                <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" class="form-control" placeholder="Digite sua pesquisa aqui..."/>
                                <button type="submit" class="btn btn-success">
                                    Pesquisar
                                </button>
                                </div>

                            </form> 
                        </div>
                    
                        <div class="col-2">

                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-12">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Código de barras</th>
                                <th scope="col">Imagem</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < 10; $i++)
                                {
                                        echo "<tr>
                                        
                                        <td>Id $i</td>
                                        <td>Descrição $i</td>
                                        <td>Valor $i</td>
                                        <td>Código de barras $i</td>
                                        <td>Imagem $i</td>
                                        <td>
                                                <a href='' class='btn btn-warning'>
                                                Editar
                                                </a>
                                                <a href='' class='btn btn-danger'>
                                                Excluir
                                                </a>
                                        </td>
                                    </tr>";
                                }
                                ?>
                                
                              
                            </tbody>
                            </table>
                            
                    </div>
                        </div>
                    

            </div>
           
        </div>
    </div>
 </div>





<?php include "rodape.php"; ?>