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

