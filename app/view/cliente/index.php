<?php 
	  	session_start(); 

	 	require_once("../../model/connect.php");

	 	$resultado = $conecta->query("SELECT COUNT(cpf) FROM clientes");

	 	$conta_clientes = 0;

	 	while($consulta = $resultado->fetch(PDO::FETCH_ASSOC)){

	 		$conta_clientes = $consulta['COUNT(cpf)'];
	 		
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
			<h2>Clientes</h2> 
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
				<h3>Total de Clientes Cadastrados : <span style="color: green;"><?php echo $conta_clientes;?></span></h3>
  			</div>
		</div>
  		
  		<div class="col-xs-6 col-md-3">
           <a href="visualizarCliente.php" class="thumbnail">Visualizar Cliente
           <img src="../../img/visualizar_cliente.png" alt="Clientes" >
           </a>
        </div>	

        <div class="col-xs-6 col-md-3">
           <a href="cadastrarCliente.php" class="thumbnail">Cadastrar Cliente
           <img src="../../img/adicionar_cliente.png" alt="Clientes" >
           </a>
        </div>	
			
		<div class="col-xs-6 col-md-3">
           <a href="editarCliente.php" class="thumbnail">Editar Cliente
           <img src="../../img/editar_cliente.png" alt="Clientes" >
           </a>
        </div>
			
		<div class="col-xs-6 col-md-3">
           <a href="buscarCliente.php" class="thumbnail">Buscar Cliente
           <img src="../../img/buscar_cliente.png" alt="Clientes" >
           </a>
        </div>	

        <div class="col-xs-6 col-md-3">
           <a href="editarCliente.php" class="thumbnail">Remover Cliente
           <img src="../../img/remover_cliente.png" alt="Clientes" >
           </a>
        </div>		
	</div>
		
	<?php require_once('../../model/footer.php');?>