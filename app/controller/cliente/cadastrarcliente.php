<?php
require_once("../../model/connect.php");

//variaveis 
$nome = $_POST['nome_cliente'];
$cpf = $_POST['cpf_cliente'];
$telefone = $_POST['telefone_cliente'];
$nascimento = $_POST['nascimento_cliente'];
$nascimento = date("Y-m-d",strtotime(str_replace('/','-',$nascimento)));
$sexo = $_POST['sexo_cliente'];
$email = $_POST['email_cliente'];
$rua = $_POST['rua_cliente'];
$complemento = $_POST['complemento_cliente'];
$n      = $_POST['numero_cliente'];
$bairro = $_POST['bairro_cliente'];
$cidade = $_POST['cidade_cliente'];
$estado = $_POST['estado_cliente'];
$cep = $_POST['cep_cliente'];



 $query = "INSERT INTO clientes  ( nome, cpf, telefone, nascimento, sexo, email, rua, complemento, n, bairro, cidade, estado, cep)  
 		   VALUES ('$nome','$cpf','$telefone','$nascimento','$sexo','$email','$rua','$complemento','$n','$bairro','$cidade','$estado','$cep')";

 $insert = mysql_query($query,$conecta); 

 
 if($insert){
    echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location.href='../../view/cliente/cadastrarCliente.php'</script>";
    mysql_close($conecta);
 }
 else{
    echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel cadastrar este produto, tente novamente!');</script>"; 
    "window.location.href='../../view/cliente/cadastrarCliente.php'</script>";
    die(mysql_error());
 }
?>
