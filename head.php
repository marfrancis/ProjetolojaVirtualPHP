<?php

include"funcoes.php";
$usuario = logarUsuario('Marcelo Ribeiro',1);

// $usuario = [];

$produtos = [
    "produto1" => ["nome"=>"Curso Fullstack","descricao"=>"O curso fullstack ensina programação","preco"=> 1200,"img"=>"img/prod1.jpg"],
    "produto2" => ["nome"=>"Curso Mobile Android","descricao"=>"O curso Mobile ensina App","preco"=> 1400,"img"=>"img/prod2.jpg"],
    "produto3" => ["nome"=>"Curso Mobile Android","descricao"=>"O curso Mobile ensina App","preco"=> 1400,"img"=>"img/prod3.jpg"],
    "produto4" => ["nome"=>"Curso Mobile Android","descricao"=>"O curso Mobile ensina App","preco"=> 1400,"img"=>"img/prod4.jpg"],
    "produto5" => ["nome"=>"Curso Mobile Android","descricao"=>"O curso Mobile ensina App","preco"=> 1400,"img"=>"img/prod5.png"],
    "produto6" => ["nome"=>"Curso Mobile Android","descricao"=>"O curso Mobile ensina App","preco"=> 1400,"img"=>"img/prod6.jpg"]
];

$produtos = addProduto("Curso de UX","Curso Top", 2000, 'img/prod1.jpg',$produtos);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Loja Virtual</title>
</head>