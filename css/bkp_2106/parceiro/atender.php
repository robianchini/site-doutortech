<?php 
	
	//VALIDAR ATENDIMENTO

	include("conexao.php");
	$protocolo = $_GET['protocolo'];
  $teccpf = $_COOKIE['ckteccpf'];

	
	//DADOS DO CHAMADO

	$consulta = mysqli_query($con, "SELECT * FROM tb_chamado WHERE protocolo = '{$protocolo}'") or print mysql_error();
	$dados = mysqli_fetch_array($consulta);
	
	$cpfcliente = $dados['cpfcliente'];
	$cidadechamado = $dados['cidade'];
	$dispositivochamado = $dados['dispositivo'];
	$sistemachamado = $dados['sistema'];
	$servicochamado = $dados['servico'];
	$precochamado = $dados['preco'];


	// DADOS DO CLIENTE

	$consultacli = mysqli_query($con, "SELECT * FROM tb_cliente WHERE cpf = '{$cpfcliente}'") or print mysql_error();
	$dadoscli = mysqli_fetch_array($consultacli);

	$nomecli = $dadoscli['nome'];
	$emailcli = $dadoscli['email'];
	$telefonecli = $dadoscli['telefone'];


	// DADOS DO TECNICO
	$consultatec = mysqli_query($con, "SELECT * FROM tb_tecnico WHERE cpf = '{$teccpf}'") or print mysql_error();
	$dadostec = mysqli_fetch_array($consultatec);

	$nometec = $dadostec['nome'];
	$emailtec = $dadostec['email'];
	$telefonetec = $dadostec['telefone'];


  // ALTERAÇÃO BANCO DE DADOS

  $altera = ("UPDATE tb_chamado SET status = 'Em atendimento' WHERE protocolo = '$protocolo'");
  mysqli_query($con, $altera);


  // ENVIA E-MAIL CLIENTE

  $assuntocli = "Chamado $protocolo em atendimento";
  $mensagemcli = "Olá, $nomecli! \nA sua solicitação $protocolo está em atendimento.\nA seguir, temos as informações do técnico responsável pelo chamado:\nNome: $nometec\nTelefone: $telefonetec\nE-mail: $emailtec\n\nEm breve o técnico entrará em contato com você para agendar o atendimento!";

  mail("$emailcli", "$assuntocli", "$mensagemcli","From: naoresponda@doutor.tech");



  // ENVIA E-MAIL CLIENTE

  $assuntotec = "Chamado $protocolo em atendimento";
  $mensagemtec = "Olá, $nometec! \nVocê está no atendimento da solicitação $protocolo\nA seguir, temos as informações do cliente para que você realize o contato e agende o atendimento:\nNome: $nomecli\nTelefone: $telefonecli\nE-mail: $emailcli\n\nDica: entre em contato com o cliente o mais rápido possível!";

  mail("$emailtec", "$assuntotec", "$mensagemtec","From: naoresponda@doutor.tech");

  ?>



 <!-- MOSTRAR CONFIRMAÇÃO -->

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Doutor Tech</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- Folha de estilos principal -->
    <link rel="stylesheet" href="css/style.css">

  


  </head>

  <body style="background-color: #eeeeee">


    <div style="background-color: #233d4f; position: fixed; top: 0; width: 100%; height: 50px; padding: 10px;"></div>


    <br><br>


    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="formcad">

            <h5>Este chamado está em atendimento!</h5>                       
            <p><?php echo "A seguir, temos os dados de contato do cliente:"; ?></p> <br>

            <p><b>Nome:</b><?php echo " $nomecli";?></p>
            <p><b>Telefone:</b><?php echo " $telefonecli";?></p>
            <p><b>E-mail:</b><?php echo " $emailcli";?></p><br>

            <p class="alert alert-primary"><i>Dica: entre em contato com o cliente o mais rápido possível!</i></p>


            <br><br>


            <a href="home.php" class="btn btn-success">Concluir</a>


         </div>
        </div>
      </div>
    </div>


    <?php

      $string_sql = "INSERT INTO tb_chamado (idchamado, datasolicitacao, protocolo, cpfcliente, cidade, dispositivo, sistema, servico, status, preco, idtecnico, dataatendimento, dataencerramento, datacancelamento) VALUES (null, '{$agora}','{$protocolo}','{$cpf}','{$cidade}','{$dispositivo}','{$sistema}','{$servico}','{$status}','{$preco}', null, null, null, null)";

      mysqli_query($con, $string_sql);

      $mensagemadm = "Novo pedido recebido! \n \nNome do cliente: $nome \nCidade: $cidade \nDispositivo: $dispositivo \nSistema Operacional: $sistema \nServiço: $servico \nProtocolo: $protocolo\n Valor total: $preco";
      $mensagemcli = "Olá, $nome! \nRecebemos a sua solicitação. \n\nCidade: $cidade \nDispositivo: $dispositivo \nSistema Operacional: $sistema \nServiço: $servico \nProtocolo: $protocolo \nValor total: $preco \n\n\n Em breve um de nossos técnicos entrará em contato com você pelo telefone $telefone para agendar o atendimento."; 

      $assunto = "Confirmação da solicitação $protocolo!";


      // envia email cliente
      //mail("$email", "$assunto", "$mensagemcli","From: naoresponda@doutor.tech");


      // envia email admin
      //mail("rodrigo.bianchinii@gmail.com", "ADM - Nova solicitação registrada", "$mensagemadm","From: naoresponda@doutor.tech");


     ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>