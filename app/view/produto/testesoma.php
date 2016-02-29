<?php

		require_once("../../model/connect.php");
		
        $sql = "SELECT SUM(preco_compra), SUM(preco_venda) FROM produtos";                    
        $result = mysql_query($sql, $conecta); 
		$soma_preco_compra = 0;
		$soma_preco_venda = 0;


		while ($consulta = mysql_fetch_array($result)) {
			$soma_preco_compra =  $consulta['SUM(preco_compra)'];
			$soma_preco_venda =  $consulta['SUM(preco_venda)'];
		}
		$total_preco_compra = number_format($soma_preco_compra, 2, '.', '');
		$total_preco_venda = number_format($soma_preco_venda, 2, '.', '');
		$ganho_liquido = $total_preco_venda - $total_preco_compra;
		print "$total_preco_compra";
		print "$total_preco_venda";
		print "$ganho_liquido";

?>