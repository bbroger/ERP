<!DOCTYPE html>
<html>
	<head>

	<title>Visualizar Produtos - O Caeira - Web Estoque</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.min.css">

	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}
	</script>
	</head>

	<body class="container-fluid cadastro">

	<div  class="col-xs-12 col-md-12">

		<div class="panel panel-default">

			<div class="panel-heading">
			<h1 > Produtos - O Caeira</h1>
			<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
			</div>
			<h3>Informações -  Produtos</h3>
			<div class="panel-body">
			<div class="table-responsive">
				<!-- Aqui sera a consulta do mysql -->
				<table class="table table-hover">
					<thead>
						<th>#</th>
						<th>Código</th>
						<th>Nome</th>
						<th>Marca</th>
						<th>Descrição</th>
						<th>Quantidade</th>
						<th>Sessão</th>
						<th>Preço Compra</th>
						<th>Preço Venda</th>
						<th>Data Vencimento</th>
						<th>Data Cadastro</th>
						<th>Imagem</th>
					</thead>
					
			    	 <tbody>
	<?php 
		include("../../model/connect.php");
        $sql = "SELECT codigo, nome, marca, descricao, quantidade, sessao, preco_compra, preco_venda, data_vencimento, data_cadastro, imagem FROM produtos";                    
        $result = mysql_query($sql, $conecta); 
		$numerador = 1;     
		        /* Escreve resultados até que não haja mais linhas na tabela */ 
		        while( $consulta = mysql_fetch_array($result)) {
		           print "<td>$numerador</td>";
		           print "<td>$consulta[codigo]</td>";
		           print "<td>$consulta[nome]</td>"; 
		           print "<td>$consulta[marca]</td>"; 
		           print "<td>$consulta[descricao]</td>";
		           print "<td>$consulta[quantidade]</td>"; 
		           print "<td>$consulta[sessao]</td>";
		           print "<td>$consulta[preco_compra]</td>";
		           print "<td>$consulta[preco_venda]</td>";
		           print "<td>$consulta[data_vencimento]</td>";
		           print "<td>$consulta[data_cadastro]</td>";
		           print "<td><img src='../../controller/produto/img_produtos/$consulta[imagem]' width='25' heigth='25'></td>"; 
		      
		           print "</tbody>";
		           $numerador++;
		         } 
	    		print "</table>";
		        //mysql_free_result($result); 
		        mysql_close($conecta); 
		     ?>
	
			</div>
		</div>
		</div>
	</div>
<?php
	require_once('../../model/footer.php');
?>
