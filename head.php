<?php

include_once"funcoes.php";

$usuario = isset($_SESSION['usuario'])?$_SESSION['usuario']:"";

// $usuario = [];

$jsonProdutos = file_get_contents('Produtos.json');
$produtos = json_decode($jsonProdutos, true);
$produtos = $produtos['Produtos'];

// addProduto("Curso Mobile Android","Curso para criar um app",2300,"img/prod1.jpg")

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Loja Virtual</title>
</head>