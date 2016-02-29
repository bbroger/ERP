<!DOCTYPE html>
<html>
	<head>

	<title>Cadastrar Clientes - O Caeira - Web Estoque</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}
	</script>
	</head>
	<body>

	<div class="container cadastro">
		<div class="row">
			<div  class="col-xs-12 col-md-12">
				<div class="panel panel-default ">
					<div class="panel panel-heading">
						<h1 >Cadastrar Clientes - O Caeira</h1>
						<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
					</div>

					
					<div class="panel-body">
						<div class="row">
						<div class="col-md-1"></div>
							<div class="col-md-10">
								<h3> Informações -  Clientes</h3>
								<form  class="form-horizontal" method="POST" enctype="multipart/form-data" action="../../controller/cliente/cadastrarcliente.php">

									<div class="form-group">
										<label>Nome:</label><br>
										<div class="col-sm-10">
											<input type="text" name="nome_cliente" class="form-control"/>
										</div>
									</div>	

									<div class="form-group">
										<label>CPF:</label><br>
										<div class="col-sm-4">
											<input type="number" name="cpf_cliente" pattern="[0-9]*" class="form-control"/>
										</div>
									</div>	

									
									<div class="form-group">	
										<label>Telefone:</label><br>
										<div class="col-sm-4" >
											<input type="text" name="telefone_cliente" class="form-control"/>
										</div>
									</div>


									<div class="form-group">	
										<label>Data Nascimento:</label><br>
										<div class="col-sm-4">
											<input type="date" name="nascimento_cliente" class="form-control"/>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label">Sessão:</label><br>
										<div class="col-sm-4" >
											<select  name="sexo_cliente" class="form-control">
												<option value="f">Feminino</option>
												<option value="m">Masculino</option>
												<option value="o">outro</option>
											</select>
										</div>
									</div>

									<div class="form-group">	
										<label>E-mail:</label><br>
										<div class="col-sm-4">
											<input type="email" name="email_cliente" class="form-control"/>
										</div>
									</div>

									<div class="endereco">

										<div class="form-group">	
											<label>Rua:</label><br>
											<div class="col-sm-8">
												<input type="text" name="rua_cliente" class="form-control"/>
											</div>
										</div>

										<div class="form-group">	
											<label>Complemento:</label><br>
											<div class="col-sm-4">
												<input type="text" name="complemento_cliente" class="form-control"/>
											</div>
										</div>

										<div class="form-group">	
											<label>Número:</label><br>
											<div class="col-sm-4">
												<input type="text" name="numero_cliente" class="form-control"/>
											</div>
										</div>

										<div class="form-group">	
											<label>Bairro:</label><br>
											<div class="col-sm-4">
												<input type="text" name="bairro_cliente" class="form-control"/>
											</div>
										</div>

										<div class="form-group">	
											<label>Cidade:</label><br>
											<div class="col-sm-4">
												<input type="text" name="cidade_cliente" class="form-control"/>
											</div>
										</div>

										<div class="form-group">	
											<label>Estado:</label><br>
											<div class="col-sm-4">
												<input type="text" name="estado_cliente" class="form-control"/>
											</div>
										</div>

										<div class="form-group">	
											<label>CEP:</label><br>
											<div class="col-sm-4">
												<input type="text" name="cep_cliente" class="form-control"/>
											</div>
										</div>
									</div>
									
									
									<br>
										<input type="submit" class="col-sm-5 btn btn-success form-control" name="enviar" value="Cadastrar"/>  <br><br>	
										
								</form>
									<button class="col-offset-5 col-sm-5 btn btn-warning form-control" onclick="voltar();">Cancelar</button>
						</div> <!-- FIm do coll-->
						<div class="col-md-1"></div>
					</div>
				</div><!-- Fim do paenl body-->
			</div><!-- Fim do panel-->
		</div> <!-- Fim do col-->
	</div><!-- fim do row-->
<?php
	require_once('../../model/footer.php');
?>
