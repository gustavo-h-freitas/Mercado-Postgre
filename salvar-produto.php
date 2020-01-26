<?php

$nome = @$_REQUEST['descricao'];
$preco = @$_REQUEST['valor'];
$qtd = @$_REQUEST['quantidade'];
$categoria = @$_REQUEST['categoria'];

$sql = "INSERT INTO produto(descricao, qtd, valor, categoria_id) VALUES('".$nome."','".$qtd."','".$preco."','".$categoria."')";
$res = $postgre->query($sql);

if($res==true){
  echo '<h3>Sucesso</h3>';
}else{
  echo '<h3>Falhou :(</h3>';
  echo $sql;
}
 
?>