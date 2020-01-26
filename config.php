<?php

$postgre = new PDO("pgsql:host=127.0.0.1 options='--client_encoding=UTF8';port=5432;dbname=mercado", "postgres", "75759");
$postgre->exec("set names utf8");

$sql = "SELECT * FROM produto";
/*$res = $postgre->query($sql);
$qtd = $res->rowCount();

for ($a = 0; $a < $qtd; $a++){

  $row = $res->fetch(PDO::FETCH_NUM);
  echo 'Quantidade de produtos: '.$row[2];
  echo '<br>';
}
*/
?>

