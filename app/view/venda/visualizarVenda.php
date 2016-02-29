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
			<h1 > Vendas - O Caeira</h1>
			<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
			</div>
			<h3>Informações -  Vendas</h3>
			<div class="panel-body">
				<!-- Aqui sera a consulta do mysql -->
				<table class="table table-hover">
					<thead>
						<th>#</th>
						<th>Operação</th>
						<th>Código</th>
						<th>Nome</th>
						<th>Preco</th>
						<th>Quantidade</th>
						<th>Total</th>
						
					</thead>
					
			    	 <tbody>
	<?php 
		include("../../model/connect.php");
        $sql = "SELECT * FROM vendas";                    
        $result = mysql_query($sql, $conecta); 
		$numerador = 1;     
		        /* Escreve resultados até que não haja mais linhas na tabela */ 
		        while( $consulta = mysql_fetch_array($result)) {
		           print "<td>$numerador</td>";
		           print "<td>$consulta[operacao]</td>";
		           print "<td>$consulta[codigo]</td>";
		           print "<td>$consulta[nome]</td>"; 
		           print "<td>$consulta[preco]</td>"; 
		           print "<td>$consulta[quantidade]</td>"; 
		           print "<td>$consulta[total]</td>";
		           
		      
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
<?php
	require_once('../../model/footer.php');
?>
