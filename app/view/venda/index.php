<?php 
	  	session_start(); 

	 	require_once("../../model/connect.php");

	 	$sql = "SELECT id_operacao FROM operacao ORDER BY id_operacao DESC LIMIT 1";

	 	$resultado = mysql_query($sql, $conecta);

	 	$incrementa = 1;
	 	while($consulta = mysql_fetch_array($resultado)){
	 				$incrementa += $consulta['id_operacao'];
	 	}

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
			<h2>Vendas</h2> 
			<?php 
				  if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
				   { 
				   		unset($_SESSION['usuario']); 
				   		unset($_SESSION['senha']); 
				   		header('location:../index.php'); 
				   }
				  	
				  	$logado = $_SESSION['usuario'];
				  	echo "<h4> Bem vindo, $logado!</h4> <a href='../../' class='btn btn-info'><span class='glyphicon glyphicon-home'></span> Principal</a>"; 
			?>
		</div>
	 </div>

	<div class="row">

  		<div class="col-xs-6 col-md-3">
			<form action="iniciarVenda.php" method="GET">
				<a href="iniciarVenda.php?iniciar_venda=<?echo $incrementa?>" type="" class="thumbnail">Realizar Vendas <img src="../../img/pedido.png" alt="Pedido" > </a>"
			</form>
        </div>	
        
        
        <div class="col-xs-6 col-md-3">
           <a href="visualizarVenda.php" class="thumbnail">Listar Vendas
           <img src="../../img/listar.png" alt="Vendas" >
           </a>
        </div>	
			<!--
		<div class="col-xs-6 col-md-3">
           <a href="#editarCliente.php" class="thumbnail">Editar Cliente
           <img src="#../../img/editar_cliente.png" alt="Clientes" >
           </a>
        </div>
			
		<div class="col-xs-6 col-md-3">
           <a href="#buscarCliente.php" class="thumbnail">Buscar Cliente
           <img src="#../../img/buscar_cliente.png" alt="Clientes" >
           </a>
        </div>	

        <div class="col-xs-6 col-md-3">
           <a href="#editarCliente.php" class="thumbnail">Remover Cliente
           <img src="#../../img/remover_cliente.png" alt="Clientes" >
           </a>
        </div>		
	</div>
	-->
		
	<?php require_once('../../model/footer.php');?>