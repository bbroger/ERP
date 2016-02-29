<?php



require_once("../../model/connect.php");


$codigo = $_GET['codigo'];

$query_deleta_protudo = "DELETE FROM produtos WHERE codigo = $codigo";

$deleta_produto = mysql_query($query_deleta_protudo,$conecta);

if($deleta_produto)
        {
           echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Produto removido com sucesso!');window.location=('../../view/produto/editarProduto.php')</script>";
        }
      else
        {
           echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel remover esse produto, tente novamente!');
           window.location=('../../view/produto/editarProduto.php')</script>";
           mysql_error();
        }


?>