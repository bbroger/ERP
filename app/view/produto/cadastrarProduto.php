<!DOCTYPE html>
<html>
	<head>

	<title>Cadastrar Produtos - O Caeira - Web Estoque</title>
	<link rel="stylesheet" type="text/css" href="../../model/css/bootstrap.css">
	<meta charset="utf-8">


	<script type="text/javascript">
			function voltar(){
				alert("Voltando!");
					window.location.href=('index.php');
			}
	</script>
	</head>
	<body class="container cadastro">

	
	<div  class="col-xs-12 col-md-12">

		<div class="panel panel-default ">

			<div class="panel panel-heading">
				<h1 >Cadastrar Produtos - O Caeira</h1>
				<<a href="../../"><span class="glyphicon glyphicon-home"> Principal</span></a> | <a href="index.php"> <span class="glyphicon glyphicon-chevron-left"> Voltar</span></a>
			</div>

			
			<div class="panel-body">
				<h3> Informações -  Produtos</h3>
				<form  class="form-horizontal" method="POST" enctype="multipart/form-data" action="../../controller/produto/cadastrarproduto.php">

				<div class="form-group">
						<label class=" control-label">Código:</label><br>
						<div class="col-sm-4">
						<input type="number" name="codigo_produto" class="form-control"/>
						</div>
					</div>
					<div class="form-group">
						<label>Nome:</label><br>
						<div class="col-sm-10">
							<input type="text" name="nome_produto" class="form-control"/>
						</div>
					</div>	

					<div class="form-group">
						<label>Marca:</label><br>
						<div class="col-sm-4">
							<input type="text" name="marca_produto"  class="form-control"/>
						</div>
					</div>	

					
					<div class="form-group">	
						<label>Descrição:</label><br>
						<div class="col-sm-4" >
							<input type="text" name="descricao_produto" class="form-control"/>
						</div>
					</div>


					<div class="form-group">	
						<label class=" control-label">Quantidade:</label><br>
						<div class="col-sm-4">
							<input type="number" name="quantidade_produto" class="form-control"/>
						</div>
					</div>

						
					<div class="form-group">
						<label class="control-label">Sessão:</label><br>
						<div class="col-sm-4" >
							<select  name="sessao_produto" class="form-control">
								<option value="0">Balcão</option>
								<option value="1">Prateleira 1</option>
								<option value="2">Prateleira 2</option>
								<option value="3">Prateleira 3</option>
								<option value="4">Prateleira 4</option>
								<option value="5">Prateleira 5</option>
								<option value="6">Prateleira 6</option>
								<option value="7">Prateleira 7</option>
								<option value="8">Prateleira 8</option>
								<option value="9">Prateleira 9</option>
								<option value="10">Prateleira 10</option>
								<option value="11">Prateleira 11</option>
								<option value="12">Prateleira 12</option>
								<option value="13">Prateleira 13</option>
								<option value="14">Prateleira 14</option>
								<option value="15">Prateleira 15</option>
								<option value="16">Prateleira 16</option>
								<option value="17">Prateleira 17</option>
								<option value="18">Prateleira 18</option>
								<option value="19">Prateleira 19</option>
								<option value="20">Prateleira 20</option>
								<option value="21">Prateleira 21</option>
								<option value="22">Prateleira 22</option>
								<option value="23">Prateleira 23</option>
								<option value="24">Prateleira 24</option>
								<option value="25">Prateleira 25</option>
								<option value="26">Prateleira 26</option>
								<option value="27">Prateleira 27</option>
								<option value="28">Prateleira 28</option>
								<option value="29">Prateleira 29</option>
								<option value="30">Prateleira 30</option>
								<option value="31">Prateleira 31</option>
								<option value="32">Prateleira 32</option>
								<option value="33">Prateleira 33</option>
								<option value="34">Prateleira 34</option>
								<option value="35">Prateleira 35</option>
								<option value="36">Prateleira 36</option>
								<option value="37">Prateleira 37</option>
								<option value="38">Prateleira 38</option>
								<option value="39">Prateleira 39</option>
								<option value="40">Prateleira 40</option>
								<option value="41">Prateleira 41</option>
								<option value="42">Prateleira 42</option>
								<option value="43">Prateleira 43</option>
								<option value="44">Prateleira 44</option>
								<option value="45">Prateleira 45</option>
								<option value="46">Prateleira 46</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label" >Preço Compra:</label><br>
						<div class="col-sm-3">
							<input type="text" name="precocompra_produto" class="form-control" placeholder="00,00"/>
						</div>
					</div>	


					<div class="form-group">
						<label class=" control-label">Preço Venda:</label><br>
						<div class="col-sm-3">
							<input type="text" name="precovenda_produto" class="form-control" placeholder="00,00"/>
						</div>
					</div>	


					<div class="form-group">	
						<label class="control-label">Data Vencimento:</label><br>
						<div class=" col-sm-3">
							<input type="date" name="datavencimento_produto" class="form-control"/>
						</div>
					</div>	

					<div class="form-group">
						<label>Imagem Produto</label>
	    					<input class="form-control" type="file" name="imagem_produto"  size="20"><br>		
					</div>

					
						<br>
						<input type="submit" class="col-sm-5 btn btn-success form-control" name="enviar" value="Cadastrar"/>  <br><br>	
						
				</form>
					<button class="col-offset-5 col-sm-5 btn btn-warning form-control" onclick="voltar();">Cancelar</button>
					</div>
			</div>
		</div>
		
	</div>
<?php
	require_once('../../model/footer.php');
?>
