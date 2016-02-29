<?php
require_once("../../model/connect.php");

//variaveis 
$nome = $_POST['nome_produto'];
$marca = $_POST['marca_produto'];
$descricao = $_POST['descricao_produto'];
$quantidade = $_POST['quantidade_produto'];
$sessao = $_POST['sessao_produto'];
$preco_compra = $_POST['precocompra_produto'];
$preco_venda = $_POST['precovenda_produto'];
$data_vencimento = $_POST['datavencimento_produto'];
$data_vencimento = date("Y-m-d",strtotime(str_replace('/','-',$data_vencimento)));
$imagem = $_FILES['imagem_produto']['name'];
$codigo = $_POST['codigo_produto'];


$query = "INSERT INTO produtos  (nome, marca, descricao, quantidade, sessao, preco_compra, preco_venda, data_vencimento, imagem, codigo)  
 		   VALUES ('$nome','$marca','$descricao','$quantidade','$sessao','$preco_compra','$preco_venda','$data_vencimento','$imagem','$codigo')";

 $insert = mysql_query($query,$conecta); 


 if (($_POST['nome_produto']) && ($_FILES['imagem_produto']['name'])) {
       move_uploaded_file($_FILES['imagem_produto']['tmp_name'], "img_produtos/".$_FILES['imagem_produto']['name']);
       
	}

 
 if($insert){
    echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location.href='../../view/produto/cadastrarProduto.php'</script>";
    mysql_close($conecta);
 }
 else{
    echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel cadastrar este produto, tente novamente!');</script>"; 
    "window.location.href='../../../view/cadastrarProduto.php'</script>";
    die(mysql_error());
 }
?>
