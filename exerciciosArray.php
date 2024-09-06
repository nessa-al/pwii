<?php  //          1        2         3
$frutas = array("maça", "banana", "laranja") ;
print_r ($frutas); // Escreve na tela os dados basicos do array.

var_dump($frutas); // Detalha os dados do array.

echo count($frutas); // Escreve na tela a quantidade de itens que o array possui.

array_push($frutas, "kiwi"); // Adiciona um novo item ao array.

foreach($frutas as $fruta){
    echo $fruta."<br>";
}

//Exercicio Gere um Array que a cada indice desse array receba um novo array com as Chaves 
//Nome, Idade e Email com seus respectivos valores inventados aleatoriamente.

$pessoas = array(

    array(
        "nome"=>"Marcio Castelle", 
        "idade"=>"47",
        "email"=>"mar_cio@gmail.com"
    ),
    array(
        "nome"=>"Fernanda Vidal", 
        "idade"=>"57",
        "email"=>"fer_vidal@gmail.com"
    ),
    array(
        "nome"=>"Claudineia Radiguieri", 
        "idade"=>"50",
        "email"=>"cra_rad@hotmail.com"
    ),
    array(
        "nome"=>"Raphael Montanheiro", 
        "idade"=>"37",
        "email"=>"rapha_montanheiro@gmail.com"
    ),
    array(
        "nome"=>"Sophia Souza ", 
        "idade"=>"19",
        "email"=>"soso_souza@gmail.com"
    ),
    array(
        "nome"=>"Wellington Cantelli", 
        "idade"=>"39",
        "email"=>"well_dinho@outloook.com"
    ),
    array(
        "nome"=>"Lucia Regina", 
        "idade"=>"53",
        "email"=>"lucia_gouvea@gmail.com"
    ),
    array(
        "nome"=>"Joao Vitor", 
        "idade"=>"36",
        "email"=>"jv_pereira@gmail.com"
    ),
    array(
        "nome"=>"Sabrina Shurman", 
        "idade"=>"32",
        "email"=>"shurman_sa@gmail.com"
    ),
    array(
        "nome"=>"Marcela Tonelly", 
        "idade"=>"25",
        "email"=>"mar.tonelly@outloook.com"
    ),
  );

 //for($i = 0; $i < count($pessoas); $i++  ) 
//{
    //echo $pessoas[$i]."<br>";
    //echo $i;
    //echo "<pre>";
    //print_r($pessoas[$i]);
    //echo "</pre>";
//} 

    echo "<table border='5'>";
    echo "<tr>";
    echo "<td>Nome</td>";
    echo "<td>Idade</td>";
    echo "<td>Email</td>";
    echo "</tr>";

    for($i = 0; $i < count($pessoas); $i++  )
    {
    echo "<tr>";
    echo "<td>".$pessoas[$i]["nome"]."</td>";
    echo "<td>".$pessoas[$i]["idade"]."</td>";
    echo "<td>".$pessoas[$i]["email"]."</td>";
    echo "</tr>";
     }

     foreach($pessoas as $a)
     {
     echo "<tr>";
     echo "<td>".$a["nome"]."</td>";
     echo "<td>".$a["idade"]."</td>";
     echo "<td>".$a[$i]["email"]."</td>";
     echo "</tr>";
     }

     echo "</table>";


?>