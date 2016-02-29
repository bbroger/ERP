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


      $query = "UPDATE clientes SET nome='$nome',
                                    cpf='$cpf',
                                    telefone='$telefone',
                                    nascimento='$nascimento',
                                    sexo='$sexo',
                                    email='$email',
                                    rua='$rua',
                                    complemento='$complemento',
                                    n='$n',
                                    bairro ='$bairro',
                                    cidade='$cidade',
                                    estado ='$estado',
                                    cep = '$cep'

                                   WHERE  cpf=$cpf";



      $atualiza = mysql_query($query,$conecta);     

      if($atualiza)
        {
           echo"<script language='javascript'  charset='utf-8' type='text/javascript'>alert('Cliente atualizado com sucesso!');window.location=('../../view/cliente/editarCliente.php')</script>";
        }
      else
        {
           echo"<script language='javascript' charset='utf-8' type='text/javascript'>alert('N\u00e3o foi poss\u00edvel atualizar esse cliente, tente novamente!');
           window.location=('../../view/cliente/editarCliente.php')</script>";
           mysql_error();
        }
?>