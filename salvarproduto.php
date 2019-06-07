<?php

include_once "funcoes.php";

$contadorImputVazio = 0;

foreach($_POST as $item) {
    $item == "" ?$contadorImputVazio++:0;
}

if($contadorImputVazio ==count($_POST))  {
    
 echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
 echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para página de cadastro!</a>';
 exit;
    
}

$imgAceitas = ["image/png","image/jpg","img/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];

$nomeProduto = $_POST['nomeProduto'];
$precoproduto = $_POST['precoProduto'];
$descProduto = $_POST['descProduto'];
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTmp = $_FILES['arquivo']['tmp_name'];
$caminhoImg = "img/$nomeArquivo";
$typeFile = $_FILES['arquivo']['type'];


if($erroEnvio !== 0){
    echo "<h1>Houve um erro no envio do arquivo, verifique e tente novamente!</h1>";
    echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para página de cadastro!</a>';
    exit;
}

if(array_search($typeFile, $imgAceitas) == false );

    echo "<h1>Extensão do arquivo invalida, verifique se o arquivo é uma imagem do tipo png, jpg ou jpeg!</h1>";
    echo '<a class="btn btn-primary" href="cadastroProduto.php">Voltar para página de cadastro!</a>';
    exit;


move_uploaded_file($arquivoTmp, "img/$nomeArquivo");
addProduto($nomeProduto,$descProduto,$precoproduto,$caminhoImg);

