<?php 

	require_once("../../model/connect.php");
 	

 	$codigo_produto = $_POST['codigo_produto'];
 	$operacao_p = $_POST['operacao'];
 	$quantidade = $_POST['quantidade'];


 	$query = "SELECT codigo, nome, preco_venda FROM produtos WHERE codigo = $codigo_produto";

	$result = mysql_query($query,$conecta);


	while ($consulta = mysql_fetch_array($result)) {
		$codigo_p = $consulta['codigo'];
		$nome_p =  $consulta['nome'];
		$preco_venda_p = $consulta['preco_venda'];
		$valortotal = $quantidade * $consulta['preco_venda'];
	}

	

	echo "<h1>Valor total: $valortotal , quantidade: $quantidade</h1>
		<br>Operacao: $operacao_p, Codigo:  $codigo_p, Nome: $nome_p, Preco: $preco_venda_p";

	if ($result) 
	{
		 $query2 = "INSERT INTO vendas  ( operacao,     codigo,     nome,    quantidade,    preco,           total) 
		 						 VALUES ('$operacao_p','$codigo_p','$nome_p','$quantidade','$preco_venda_p','$valortotal')";
		
		 $insert = mysql_query($query2,$conecta); 
		

		 	if($insert) {
		 		print "<script> window.location.href='../../view/venda/realizarVenda.php';</script>";
		 		
		 	}
		 	else{
		 		print "<script>alert('Operacao nao realizada!');</script>";
		 	}

	}
	else
	{
		print "<script>alert('Operacao nao realizada2!');</script>";
	}

?>