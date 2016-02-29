<?php 
	  	session_start(); 

	 	require_once("../../model/connect.php");
		
        $sql = "SELECT SUM(preco_compra), SUM(preco_venda), SUM(quantidade), COUNT(*)  FROM produtos";                    
        $result = mysql_query($sql, $conecta); 
		$soma_preco_compra = 0;
		$soma_preco_venda = 0;
		$quantidade_produtos = 0;//numero de produtos cadastrados
		$quantidade_produtos_estoque = 0;


		while ($consulta = mysql_fetch_array($result)) {
			$soma_preco_compra =  $consulta['SUM(preco_compra)'];
			$soma_preco_venda =  $consulta['SUM(preco_venda)'];
			$quantidade_produtos = $consulta['COUNT(*)'];
			$quantidade_produtos_estoque = $consulta['SUM(quantidade)'];
		}

		$total_preco_compra = number_format($soma_preco_compra, 2, ',', '');
		$total_preco_venda = number_format($soma_preco_venda, 2, ',', '');
		$ganho_liquido = $total_preco_venda - $total_preco_compra;
		

?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../../model/css/generico.css">

		<title>O Caeira - Seu melhor preço!</title>

		<script type="text/javascript">
				function sair(){
					window.location.href=("../../controller/out.php");

				}
		</script>
	</head>

<body class='container'>
	<div class="row">
		<div class="page-header"> 
			<h2>Produto</h2> 
			<?php 
				  if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
				   { 
				   		unset($_SESSION['usuario']); 
				   		unset($_SESSION['senha']); 
				   		header('location:../index.php'); 
				   }
				  	
				  	$logado = $_SESSION['usuario'];
				  	echo "<h4> Bem vindo, $logado!</h4> <a href='../../' class='btn  btn-info'><span class='glyphicon glyphicon-home'> Principal</span></a>"; 
			?>
		</div>
	 </div>

	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="jumbotron">
  				<div class="container">
    				<div class="col-md-3">
		           		<h3>Total em Estoque</h5>
		           		<small>preço custo</small>
		           		<h4>R$ <?print "$total_preco_compra";?></h4>

        			</div>

        			<div class="col-md-3">
		           		<h3>Total Liquido em Estoque</h3>
		           		<small>preço venda</small>
		           		<h4>R$ <?print "$total_preco_venda";?></h4>
        			</div>

        			<div class="col-md-3">
		           		<h3>Ganho Liquido</h3>
		           		<small>total bruto em estoque</small>
		           		<h4>R$ <?print "$ganho_liquido";?></h4>
        			</div>	

        			<div class="col-md-3">
		           		<h3>Produtos em Estoque</h3>
		           		<small>Mix de produtos</small>
		           		<h4><?print "$quantidade_produtos";?> undidade(s)</h4>
		           		<small>Quantidade Total</small>
		           		<h4><?print "$quantidade_produtos_estoque";?> undidade(s)</h4>
        			</div>	


  				</div>
  			</div>
		</div>
  		
  		<div class="col-xs-6 col-md-3">
           <a href="visualizarProduto.php" class="thumbnail">Visualizar Produto
           <img src="../../img/listar.png" alt="Clientes" >
           </a>
        </div>	

        <div class="col-xs-6 col-md-3">
           <a href="cadastrarProduto.php" class="thumbnail">Cadastrar Produto
           <img src="../../img/cadastrar.png" alt="Clientes" >
           </a>
        </div>	
			
		<div class="col-xs-6 col-md-3">
           <a href="editarProduto.php" class="thumbnail">Editar Produto
           <img src="../../img/editar.png" alt="Clientes" >
           </a>
        </div>
			
		<div class="col-xs-6 col-md-3">
           <a href="buscarProduto.php" class="thumbnail">Buscar Produto
           <img src="../../img/buscar.png" alt="Clientes" >
           </a>
        </div>	

        <div class="col-xs-6 col-md-3">
           <a href="editarProduto.php" class="thumbnail">Remover Produto
           <img src="../../img/remove.png" alt="Clientes" >
           </a>
        </div>		
	</div>
		
	<?php require_once('../../model/footer.php');?>