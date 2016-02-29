<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="author" name="Professor Felipe Alves">
		<link rel="stylesheet" type="text/css" href="../app/model/css/bootstrap.css">
		<title>Login - Web Estoque - O Caeira</title>


		<script type="text/javascript">
		 	function cancelar(){
		 		window.location.href=('../erro.php')
		 	}
		</script>
	</head>


	<body class="container">
		

		<div class="col-xs-12 col-md-6">
			<div>
				<center>
					<h3>Login</h3>
					<legend>Sistema de Login</legend>
				</center>
				 <form method="post" action="auth.php" id="formlogin" name="formlogin" > 
					<div class="form-group">
					<fieldset id="fie"> 
						
						<br /> 
						<div class="form-group">
							<label class="control-label">Usuário : </label> 
							<input type="text" name="usuario" id="usuario" class="form-control"/>
						</div>

						<div class="form-group">
							<label class="control-label">Senha:</label> 
							<input type="password" name="senha" id="senha" class="form-control"/> 
							<br>
							<input type="submit" class="btn btn-success" value="Entrar"/> 

						</div>
					</fieldset> 	
				  </form>
				</div>
			</div>
		</div>

		
	</body>
</html>