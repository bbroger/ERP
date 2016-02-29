<?php

	require_once("../../model/connect.php");
	$operacao = $_GET['iniciar_venda'];


	$query = "INSERT INTO operacao (id_operacao) VALUES ('$operacao')";

	$resultado = mysql_query($query, $conecta);

	if($resultado)
	{

		print"<script>window.location.href='realizarVenda.php';</script>";
	}
	else
	{
		print"<script>alert('Problemas para inicializar a venda!');windows.location.href='realizarVenda.php';</script>";
	}