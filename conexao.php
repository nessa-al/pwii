<?php 
$servidor = "localhost";
$usuario = "root"; 
$senha = ""; 
$banco = "PW_BD"; 
$script = "
      CREATE DATABASE PW_BD;
      USE PW_BD;
      CREAT TABLE PRODUTOS(
          ID INT PRIMARY KEY AUTO_INCREMENT,
          DESCRICAO VARCHAR (150) NOT NULL,
          CODIGO_BARRAS VARCHAR (25) NOT NULL,
          VALOR DECIMAL(10,2) NOT NULL,
          IMAGEM VARCHAR(50),
          ATIVO BIT NOT NULL
          
      );

      ";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao-> connect_error) {
    die("falha na conexao: " . $conexao->connect_error);
}
?>