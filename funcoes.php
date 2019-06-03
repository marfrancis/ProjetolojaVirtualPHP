<?php 

function logarUsuario($nome, $nivelAcesso){
    $usuario = ["logado"=>true,'nome'=>$nome, "nivelAcesso"=> $nivelAcesso];
    return $usuario;

}

function addProduto($nome,$descricao,$preco,$img, $produtos){
   $novoProduto=['nome'=>$nome,'descricao'=>$descricao,'preco'=>$preco,'img'=>$img];
   $chave = count($produtos) + 1;
   $produtos["produto$chave"] = $novoProduto;
   return $produtos;
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