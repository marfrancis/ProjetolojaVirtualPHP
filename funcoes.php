<?php 

function logarUsuario($nome, $nivelAcesso){
    $usuario = ["logado"=>true,'nome'=>$nome, "nivelAcesso"=> $nivelAcesso];
    return $usuario;

}

function addProduto($nome,$descricao,$preco,$img){

    $jsonProdutos = file_get_contents('Produtos.json');
    $produtos = json_decode($jsonProdutos, true);
    
   
   $chave = count($produtos) + 1;
   $novoProduto=["id"=>"produto$chave",'nome'=>$nome,'descricao'=>$descricao,'preco'=>$preco,'img'=>$img];
   $produtos["produto$chave"] = $novoProduto;

$produtos["Produtos"][]=$novoProduto;
$jsonProdutos = json_encode($produtos);
file_put_contents('Produtos.json', $jsonProdutos);
   return true;
}




function validarNome($nome){
    return $nome != "" && strlen($nome) >=3;

}

function validarCpf($cpf){
    return strlen($cpf) == 11;
}


function validarCartao($cartaoCliente){
    return  strlen($cartaoCliente) == 16;
}


function validarDataValidade($dataValidade){
    return $dataValidade > date('y-m-d');
}

function validarCVV($cvv){
    return  strlen($cvv) == 3;
}

function addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$niveldeAcesso){

    $jsonUsuarios = file_exists("usuarios.json")? file_get_contents('usuarios.json'):"";
    $usuarios = json_decode($jsonUsuarios, true);
    
   $itensusuarios = is_array($usuarios['usuarios'])?count($usuarios['usuarios']):0;
   $chave = $itensusuarios + 1; // pergunta quantos itens tem no array
   $novoUsuario=["id"=>"usuario$chave",'nomeUsuario'=>$nomeUsuario,'email'=>$emailUsuario,'senha'=>$senhaUsuario,'niveldeAcesso'=>$niveldeAcesso];
  
   

    $usuarios["usuarios"][]=$novoUsuario;
    $jsonUsuarios = json_encode($usuarios);
    
    return file_put_contents('usuarios.json', $jsonUsuarios);
}