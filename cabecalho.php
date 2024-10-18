<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <style>
        div{
            /* border:1px solid; */
            /* margin:1px; */
        }
        </style>
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PW 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
                Página Inicial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="variavel.php">
                Variavel
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="if.php">
                If
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="recuperacao.php">
                rec.
            </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bootstrap.php">
                Bootstrap
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="array.php">
               array
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="function.php">
               function
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sorteio.php">
               sorteio
            </a>
        </li>
       
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Menu Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="produtos.php">Produtos</a></li>
            <li><a class="dropdown-item" href="novo_produto.php">Novo Produto</a></li>
            <li><a class="dropdown-item" href="editar_produto.php">Editar Produto</a></li>
            
          </ul>
        </li>
     
    </div>
  </div>
</nav>
   

<div class="container">   