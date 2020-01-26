<?php

$sql = "SELECT * FROM produto INNER JOIN categoria on produto.categoria_id = categoria.id";

$res = $postgre->query($sql);
$qtd = $res->rowCount();

echo '<table>';
echo '<tr>';
echo '<th>#</th>';
echo '<th>Descrição</th>';
echo '<th>Quantidade</th>';
echo '<th>Valor</th>';
echo '<th>Categoria</th>';
echo '<th>Status</th>';
echo '</tr>';
echo '<tr>';
  for($a = 0; $a < $qtd; $a++){
    $row = $res->fetch(PDO::FETCH_NUM);
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>'.$row[3].'</td>';
    echo '<td>'.$row[7].'</td>';
    if($row[5]==1){
      echo '<td>Disponível</td>';
    }else{
      echo '<td>Indisponível</td>';
    }
    echo '</tr>';
  }

echo '</table>'
?>
<style>

  table, th, td{
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
    padding: 5%;
  }
  th{
    padding: 20px;
  }

</style>