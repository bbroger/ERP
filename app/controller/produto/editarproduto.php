<?php
require_once("../../model/connect.php");

//variaveis 



$codigo = $_POST['codigo_produto'];
$nome = $_POST['nome_produto'];
$marca = $_POST['marca_produto'];
$descricao = $_POST['descricao_produto'];
$quantidade = $_POST['quantidade_produto'];
$sessao = $_POST['sessao_produto'];
$preco_compra = $_POST['precocompra_produto'];
$preco_venda = $_POST['precovenda_produto'];
$data_vencimento = $_POST['datavencimento_produto'];
$data_vencimento = date("Y-m-d",strtotime(str_replace('/','-',$data_vencimento)));



      $query = "UPDATE produtos SET nome = '$nome',
                                   marca ='$marca',
                                   descricao = '$descricao',
                                   quantidade = '$quantidade',
                                   sessao = '$sessao',
                                   preco_compra = '$preco_compra',
                                   preco_venda = '$preco_venda',
                                   data_vencimento = '$data_vencimento'

                                   WHERE  codigo=$codigo";



      $atualiza = mysql_query($query,$conecta);     

      if($atualiza)
        {
           echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Produto atualizado com sucesso!');window.location=('../../view/cliente/editarCliente.php')</script>";
        }
      else
        {
           echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel atualizar esse produto, tente novamente!');
           window.location=('../../view/cliente/editarCliente.php')</script>";
           mysql_error();
        }
?>