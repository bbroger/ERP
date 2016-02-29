<?php

	if(count($_POST) == 0){
		$cpf_cliente = 0;
	}
	else{
		$cpf_cliente = $_POST['cpf_cliente'];
	}
	
?>
<!DOCTYPE html>
<html>
	<head>

	<title>Visualizar Clientes - O Caeira - Web Estoque</title>
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
				<h1 > Clientes - O Caeira</h1>
				<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
			</div>

			<div class="row">

				<div class="col-md-12">

					<form action="#" method="POST" >
						<h2>Buscar Produto</h2>
						<div class="form-group">
							<div class="col-sm-5">
								<input type="number" name="cpf_cliente" placeholder="CPF Cliente"class="form-control">
								<br>
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
						<h3>Informações do Cliente</h3>

						<!-- Aqui sera a consulta do mysql -->

						<div class="row">
						<div class="col-md-12">
							<table class="table table">
								<thead>
									<th>#</th>
									<th>Nome</th>
									<th>CPF</th>
									<th>Telefone</th>
									<th>Sexo</th>
									<th>Email</th>
									<th>Editar</th>
									<th>Excluir</th>
								</thead>

								<tbody>
									<?php 
										include("../../model/connect.php");
								        $resultado = $conecta->query("SELECT cpf, nome, telefone, nascimento, sexo, email FROM clientes WHERE cpf=$cpf_cliente");                    
								       
										  
										        /* Escreve resultados até que não haja mais linhas na tabela */ 
										         while($consulta = $resultado->fetch(PDO::FETCH_ASSOC)){
										         
										           print "<td>$consulta[cpf]</td>";
										           print "<td>$consulta[nome]</td>"; 
										           print "<td>$consulta[telefone]</td>"; 
										           print "<td>$consulta[nascimento]</td>";
										           print "<td>$consulta[sexo]</td>"; 
										           print "<td>$consulta[email]</td>";
										           print "<td><a href='editarCliente.php?cpf=$consulta[cpf]' class='btn btn-warning'>Editar <span class='glyphicon glyphicon-refresh'/></a></td>";
										           print " <td><a href='../../controller/cliente/removercliente.php?cpf=$consulta[cpf]'class='btn btn-danger'>Excluir <span class='glyphicon glyphicon-remove'/></a></td>	";
								print "</tbody>";     
										          
										   }
									?>
								</table>
							</div>
						  </div><!--fim do row conteudo-->
				  	</div>
				</div>
			</div>
