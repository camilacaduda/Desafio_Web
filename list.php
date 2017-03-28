<?php
/*aqui eu peguei a query e dei um select detro do php
e guardei no result */
$result = $BD->query("select * from mercadoria");
//fetch_assoc transforma em um array o resultado
//var_dump($rows);
//die();
?>

<table class="table">
      <tr>
      	 <td>Nome da Mercadoria</td>
     	 <td>Tipo da Mercadoria</td>
         <td>Quantidade da Mercadoria</td>
         <td>Preço</td>
         <td>Tipo de Negocio</td>
         <td></td>
         </tr>


      <?php
      	while ($rows=$result->fetch_assoc()) {
      		//print_r($rows);
      	
      ?>
      <tr>
      	<td><?php echo $rows["Nome_Mercadoria"] ?></td>
      	<td><?php echo $rows["Tipo_Mercadoria"] ?></td>
      	<td><?php echo $rows["QTD_Mercadoria"] ?></td>
      	<td><?php echo $rows["Preco"] ?></td>
      	<td><?php echo $rows["Tipo_Negocio"] ?></td>
      	<td><a href="?page=delete&id=<?php echo $rows['Codigo_Mercadoria'] ?>"> Excluir </a> </td>
      </tr>

		<?php

			}
		?>

</table>