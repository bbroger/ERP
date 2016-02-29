<?php



require_once("../../model/connect.php");


$cpf = $_GET['cpf_cliente'];

$query_deleta_cliente = "DELETE FROM clientes WHERE cpf = $cpf";

$deleta_cliente = mysql_query($query_deleta_cliente,$conecta);

if($deleta_cliente)
        {
           echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Cliente removido com sucesso!');window.location=('../../view/cliente/editarCliente.php')</script>";
        }
      else
        {
           echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel remover esse cliente, tente novamente!');
           window.location=('../../view/cliente/editarCliente.php')</script>";
           mysql_error();
        }


?>