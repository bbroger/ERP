<?php

	if(count($_POST) == 0){
		$codigo_produto = 0;
	}
	else{
		$codigo_produto = $_POST['codigo_produto'];
	}
	
?>
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

	<body class="container cadastro">

		<div class="panel panel-default">

			<div class="panel-heading">
				<h1 > Produtos - O Caeira</h1>
				<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
			</div>

			<div class="row">
				<div class="col-md-12">
					<form action="#" method="POST" >
						<h2>Buscar Produto</h2>
						<div class="form-group">
							<div class="col-sm-5">
								<input type="number" name="codigo_produto" placeholder="codigo do produto"class="form-control">
								<input type="submit" name="buscar" value="Buscar" class="btn btn-info">
								
							</div>							
						</div>
					</form>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-body">
						<hr>
						<div class="col-md-6">
						<h3>Informações do produto<hr></h3>
						</div>
						<div class="col-md-6"><h3>Imagem Produto</h3><hr></div>
						<!-- Aqui sera a consulta do mysql -->

							<div class="row">
							   
								<?php 
									include("../../model/connect.php");
							        $sql = "SELECT codigo, nome, marca, descricao, quantidade, sessao, preco_compra, preco_venda, data_vencimento, data_cadastro, imagem FROM produtos WHERE codigo = $codigo_produto";                    
							        $result = mysql_query($sql, $conecta); 
									$num_rows = mysql_num_rows($result);

																    /* Escreve resultados até que não haja mais linhas na tabela */ 
								    while( $consulta = mysql_fetch_array($result)) 
								    {
									print "<div class='col-md-6'>";
							                   print "Código: $consulta[codigo]<br>";
									           print "Nome: $consulta[nome]<br>"; 
									           print "Marca: $consulta[marca]<br>"; 
									           print "Descrição: $consulta[descricao]<br>";
									           print "Quantidade: $consulta[quantidade]<br>"; 
									           print "Sessão: $consulta[sessao]<br>";
									           print "Preço Compra: $consulta[preco_compra]<br>";
									           print "Preço Venda: $consulta[preco_venda]<br>";
									           print "Vencimento: $consulta[data_vencimento]<br>";
									           print "Data de Cadastro: $consulta[data_cadastro]<br><br>";  
								 	

									 			print "<div class='row'> 
											 			<div class='container'>
												 			<div class='col-md-1'>
												 			 	 <a href='editarproduto.php?codigo=$consulta[codigo]' class='btn btn-warning'>Editar <span class='glyphicon glyphicon-refresh'/></a>
												        	</div>

										           	  		<div class='col-md-1'>
										           				 <a href='../../controller/produto/removerproduto.php?codigo=$consulta[codigo]'class='btn btn-danger'>Excluir <span class='glyphicon glyphicon-remove'/></a>
										           		     </div>
										 				</div>	
									 				</div><!--fim do row botoes-->	
									 		</div>

							         		<div class='col-md-6'>
							         			<div>
					          						<img src='../../controller/produto/img_produtos/$consulta[imagem]' width='400' heigth='400'/>
					          					</div>
					          					<small>*** Imagem ilustrativa.</small>
					          	     		</div>";
									           
									    }	
					    	
						        //mysql_free_result($result); 
						        mysql_close($conecta); 
							?>
						  </div><!--fim do row conteudo-->
				  	</div>
				</div>
			</div>
