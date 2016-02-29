<?php
	session_start(); 
	$logado = $_SESSION['usuario'];

	require_once("../../model/connect.php");
	$operacao = 0 ;

	$sql = "SELECT id_operacao  FROM operacao";
	$result = mysql_query($sql,$conecta);

	while ($consulta = mysql_fetch_array($result)) {
		$operacao = $consulta['id_operacao'];

	}

?>
<!DOCTYPE html>
<html>
	<head>

	<title>Vendas - O Caeira - Web Estoque</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Cousine' rel='stylesheet' type='text/css'>

	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}function finalizarVenda() {
				
			}


	</script>

	<style type="text/css">
	.oculto{
		display: none;
	}

	.margem{
		margin-top: -150px;
	}
	.fundo{
		background-color: #FFF7BC;
		font-family: 'Cousine' ;
		font-size: 18px;
		 border-radius: 1em 2em 1em 1em;
	}
	.valor{
		margin-top:10px;
		background-color: #B9F4FF;
		height: 80px;
		border-radius: 2em 2em 2em 2em;
	}
	.texto {
		text-align: center;
		padding-top: 10px;
		font-size: 50px;
	}
	}
	</style>
	</head>

	<body class="container cadastro">

		<div class="panel panel-default">

			<div class="panel-heading">
				<h1 > Vendas</h1>
				<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
				<h4 style="color:red;">  Caixa <?echo $logado;?></h4>
			</div>

			<div class="row">
			<br>
				<div class="form-group">
						<div class="col-md-1"></div>
				  		<div class="col-md-6">
						 	<form action="../../controller/venda/realizavenda.php" method="POST" >
									<input type="text" name="codigo_produto" placeholder="Código do Produto"class="form-control">
								</div>
								
						  		<div class="col-md-2 ">
						  				<input type="number" name="quantidade" placeholder="Quantidade"class="form-control"/>
						  		</div>	

						  		<div class="col-md-1 oculto">
						  				<input type="number" name="operacao" value='<? echo $operacao;?>'class="form-control"/>
						  		</div>

								<div class="col-md-2">
									<input type="submit" name="adicionar" value="Adicionar Produto" class="btn btn-info">
								</div>	
												
							</form>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-body">
						<div class="row">

							<div class="col-md-8 ">
								<center><h3>Informações do produto</h3></center><hr>
									<table class="  margem fundo">
										<thead >
											<tr class="info">
												<th >*</th>
												<th>cod</th>
												<th>nome</th>
												<th>quantidade</th>
												<th>preço</th>
												<th>total</th>
											</tr>
										</thead>
										<tbody >
										
											<?php 
												require_once("../../model/connect.php");
												$query = "SELECT codigo, nome, quantidade, preco , total FROM vendas WHERE operacao = $operacao";
												$result = mysql_query($query, $conecta);
												$numerador = 1;
												/* Escreve resultados até que não haja mais linhas na tabela */ 
											    while( $consulta = mysql_fetch_array($result)) 
											    {
											    	print "<td>$numerador</td>";
											    	print "<td>$consulta[codigo]</td>";
											        print "<td>$consulta[nome]</td>";
													print "<td>$consulta[quantidade]</td>";
													print "<td>$consulta[preco]</td>";
													print "<td>$consulta[total]</td><br>";
												$numerador++;
												 print "</tbody>";
												}								    		
									        	mysql_free_result($result); 
											?>
											
									</table>
							</div>
	
							<div class="col-md-4 ">
								<?php
									require_once("../../model/connect.php");
									$query = "SELECT SUM(total) FROM vendas WHERE operacao = $operacao";
									$result = mysql_query($query, $conecta);

									$total_soma = 0;

									while ($consulta = mysql_fetch_array($result)) {
										$total_soma = $consulta['SUM(total)'];
									}
									$totalpreco = number_format($total_soma, 2, ',', '');
								?>
									
								<center><h3>Valores</h3></center>
								<hr>
								<div class="valor">
									<p class="texto">Total:<?echo $totalpreco;?></p>
									
								</div>
								<br>
								<button class="btn btn-lg btn-info">Finalizar Venda</button>
								<button class="btn btn-lg btn-warning">Cancelar Venda</button>
						  	</div>	  	
				  		</div><!--fim do row conteudo-->			
					</div>
				</div>
			</div>
