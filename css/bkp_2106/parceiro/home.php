<?php 

	$nome = $_COOKIE['cktecnome'];
	

	if ($nome == "") {
		echo "<script>location.href='entrar.php'</script>";
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Doutor Tech</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="img/favicon.png">

	  <!-- Latest compiled and minified CSS 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

  <!-- Optional theme 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

  <!-- Latest compiled and minified JavaScript
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

	<!-- Script mascara campos formulario -->
	<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">
	<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>

	<!-- Ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/regular.css" integrity="sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">


	<!-- ###########################################  FOLHA DE ESTILOS ################################################ -->

	<style type="text/css">

	#botaoconta{
		cursor: pointer;
	}

	#botaoos{
		cursor: pointer;
	}




	/* SMARTPHONE */
	@media  (max-width: 480px) {  
		
	    .menu{
	      background-color: #233d4f;
	      width: 100%;
	      height: 50px;
	    }

	    .botao{
	    	color: #fff;
	    	margin: 15px;
	    	margin-top: 10px;
	    	margin-right: 20px;
	    	float: right;
	    	border-color: #fff;
	    	border-radius: 5px;
	    	border-style: solid;
	    	border-width: 1px;   	
	    	padding: 7px;
	    }

	    .texto{
	    	margin: 15px;
	    }

	    .opcao{
	    	color: #fff;
	    	width: 100%;
	    	background-color: #233d4f;
	    	border-style: none;
	    	height: 80px;
	    	font-size: 18px;
	    }

	    .mensagem{
	    	margin: 15px;
	    	margin-left: 20px;
	    	float: left;
	    	color: #fff;

	    }

	    .ajuda{
	    	text-align: center;
	    }

	    .logotipo{
      		width: 160px;
      		margin-left: 100px;
      	}

      	.espaco{
      		margin-right: 30px; 
      		margin-top: 100px;
      	}

	}

	/* Computador */
	@media (min-width: 500px) {

		.menu{
	      background-color: #233d4f;
	      width: 100%;
	      height: 80px;
	    }

	    .botao{
	    	color: #fff;
	    	margin: 30px;
	    	margin-right: 60px;
	    	float: right;
	    	padding: 5px;
	    	margin-top: 23px;
	    	border-radius: 5px;
	    	border-style: solid;
	    	border-width: 1px;   	
	    	padding: 7px;
	    }

	    .botao:hover{
			color: #233d4f;
			background-color: #fff;
	    }

	    .texto{
	    	margin: 15px;
	    }

	    .opcao{
	    	color: #fff;
	    	width: 100%;
	    	background-color: #233d4f;
	    	border-style: none;
	    	height: 80px;
	    	font-size: 18px;
	    }

	    .opcao:hover{
	    	background-color: #2c485c;
	    }

	    .mensagem{
	    	margin: 30px;
	    	margin-left: 20px;
	    	float: left;
	    	color: #fff;

	    }

	    .ajuda{
	    	text-align: center;
	    }

	    .logotipo{
      		width: 160px;
      		margin-left: 275px;
      	}

      	.espaco{
      		margin-right: 30px; 
      	}

	}


	</style>


	<script type="text/javascript">
		$(document).ready( function () {
		    $('#table_id').DataTable();
		} );


		function conta(){
			location.href="minha-conta.php"
		}

		function chamado(){
			location.href=" chamados.php"
		}

		function prova(){
			location.href=" avaliacoes.php"
		}

	</script>


</head>
<body style="background-color: #eeeeee;">

	<?php 

		$nome = $_COOKIE['cktecnome'];
		$sexo = $_COOKIE['cktecsexo'];
		$cidade = $_COOKIE['ckteccidade'];


		if ($sexo == 'M') {
			$msg = "Bem-vindo";
		}

		if ($sexo == 'F') {
			$msg = "Bem-vinda";
		}


		if ($nome == "") {
			echo "<script>location.href='login.php'</script>";
		}


	?>



	<nav class="menu">
		<?php 
			echo "<p class=\"mensagem\">$msg, $nome!</p>";
		?> 

		<a href="logout.php" class="botao"> Sair </a></li>
	</nav>

	

	<br><br>

	 <div class="container">


	 	<div class="row">
	 		<div class="col-sm-12 col-md-12">
	 			
	 			

	 		</div>
	 	</div>


	 	<div class="row">

	 		<div class="col-md-2"></div>
	 		<div class="col-md-8">
	 			<img src="image/logo.png" class="logotipo">
	 		</div>
	 		<div class="col-md-2"></div>

	 	</div>

		<div class="row">

			<div class="col-md-2"></div>

			<div class="col-sm-12 col-md-8">
				
				<br><br>


				<!--<button class="opcao" onclick="tec()" id="botaoconta">Preciso de um técnico</button> <br><br> -->
				<button class="opcao" onclick="chamado()" id="botaoconta">Atender chamado</button> <br><br>
				<button class="opcao" onclick="prova()" id="botaoconta">Avaliações</button> <br><br>
				<button class="opcao" onclick="conta()" id="botaoconta">Minha conta</button> <br><br>


				<br><br><br>

				<!--<p class="ajuda">Precisa de ajuda? <a href="#">Clique aqui!</a> </p>-->

			</div>

			<div class="col-md-2"></div>

		</div>

		<br><br>


		<div class="row">
			<div class="col-sm-12 col-md-12">

	

			</div>
		</div>

	</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>