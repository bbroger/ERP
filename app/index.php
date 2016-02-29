<?php 
	  session_start(); 
	  
	?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="model/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="model/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="model/css/generico.css">

		<title>O Caeira - Seu melhor preço!</title>

		<script type="text/javascript">
				function sair(){
					window.location.href=("controller/out.php");

				}
		</script>

	</head>

<body>

	<div class="container">
		<div class="row">
			<div class="page-header"> 
				<h2>Dashboard  - Web Estoque  - O Caeira</h2> 
				<?php 
				  if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
				   { 
				   		unset($_SESSION['usuario']); 
				   		unset($_SESSION['senha']); 
				   		header('location:../index.php'); 
				   }
				  	
				  	$logado = $_SESSION['usuario'];
				  	echo "<h4> Bem vindo, $logado!</h4> <button class='btn btn-warning' onclick='sair();'> Sair</button>"; 
				?>
			</div>
		</div><!-- fim do header-->
	
		<div class="row">

			<div class="col-md-3">
	            <a href="view/cliente/" class="thumbnail">Cliente
	            <img src="img/cliente.png" alt="Clientes" >
	            </a>
	        </div>

	        <div class="col-md-3">
	           <a href="#view/financeiro/" class="thumbnail">Financeiro
	           <img src="img/financeiro1.png" alt="Clientes" >
	           </a>
	        </div>

	        <div class="col-md-3">
	           <a href="view/produto/" class="thumbnail">Produto
	           <img src="img/produto.png" alt="Clientes" >
	           </a>
	        </div>


	        <div class="col-md-3">
	           <a href="#view/relatorio/" class="thumbnail">Relatório
	           <img src="img/relatorio1.png" alt="Clientes" >
	           </a>
	        </div>	

	        <div class="col-md-3">
	           <a href="#view/fornecedor/" class="thumbnail">Fornecedor
	           <img src="img/fornecedor.png" alt="Clientes" >
	           </a>
	        </div>


	        <div class="col-md-3">
	           <a href="view/venda/" class="thumbnail">Venda
	           <img src="img/venda.png" alt="Clientes" >
	           </a>
	        </div>	
		</div>
	</div><!-- /container -->

	<?php require_once('model/footer.php');?>