<?php include "cabecalho.php";?> 
    <h1>Array</h1>
    <p> As variaveis do tipo array são muito utilizadas quando vamos listar coisas.
        os arrays em php são listas de qualquer tipo de dados.
    </p>
    <pre>

        $array = [];
        $array = ();
        $array[0] = "Oi";
        $array[2] = 10;
        $array ["Vanessa"] = "Aluna";
        $array [$array[2]] = "teste";  
    </pre>
    <?php 
        $array = Array("Oi", 10, "Aluna", "teste", 1.99, true);
        echo "<h2> Como saber se deu certo? </h2>";
        var_dump($array);

        echo "<pre>";
        print_r($array);
        echo "</pre>";
      
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        for($i = 0; $i < count($array); $i++)
        {
            echo " $array[$i]  <br>";
        }
    
    ?>
    <p> Existem diversas formas de criar uma variavel array  </p>
    <pre>
        array(
            chave => valor,
            chave => valor2,
            chave => valor3,
            ...
            )
        </pre>
        <p> 
            Esse tipo de Array ( chave e valor) funciona da mesma 
            forma porem não existem mais os indice com números passando
            a usar string como chave para os valores
        </p>

        <?php
            $array = array(
                "foo" => "bar",
                "bar" => "foo",
            );

            // Utilizando a sintaxe curta
            $array = [
                "foo" => "bar",
                "bar" => "foo",
            ];
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            $resultados = [
                "Id" => 1,
                "Nome" => "Vanessa",
                "Idade" => 27,
                "Salario" => 5325.50,
                "Professor"=> true
            ];
            echo "<pre>";
            print_r($resultados);
            echo "</pre>";

            echo $resultados["Nome"];
        ?>

        <p>Para varrer todo o array de chave e valor
            precisamos de um laço de repetição exclusivo chamado
            foreach()</p>
            <pre>
                
                foreach ($resultados as $Chave => $valor) 
                {
                    echo $resultados[$Chave];
                    // ou 
                    echo $valor;
                }
        </pre>
        <?php    // variavel array    chave    valor
            foreach ($resultados as $Chave => $valor) 
            {
                echo "Valor pela chave: ".$resultados[$Chave]."<br>";
                // ou 
                echo "Apenas valor: ".$valor."<br>";
                echo "Apenas Chave: ".$Chave."<br>";
            }
        ?>


        



<?php include "rodape.php"; ?>