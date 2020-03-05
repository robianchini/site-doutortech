<?php 

	$nome = $_COOKIE['cktecnome'];
	

	if ($nome <> "") {
		echo "<script>location.href='home.php'</script>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Entrar • Doutor Tech</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="img/favicon.png">

	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

	<!-- Script mascara campos formulario -->
	<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">
	<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>

	<!-- Folha de estilos principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#formlogin').submit(function(){
        var dados = jQuery(this ).serialize();

        jQuery.ajax({
          type: "POST",
          url: "valida-login.php",
          data: dados,
          success: function( data )
          {
            //alert( data );
            $('#errolog').css('display', 'block')
                         .html('<p>' + data + '</p>');
          }
        });
        
        return false;
      });
    });
  </script>

  <style type="text/css">

  	.txtlink{
      color: #233d4f;
    }

    .txtlink:hover{
      color: #233d4f;
      text-decoration: underline;
    }


  </style>

</head>



<body style="background-color: #eeeeee;">

    <div style="background-color: #233d4f; width: 100%; height: 50px; padding: 10px;"></div>
	<!--
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-md-10"></div>
			</div>
		</div>
	</header> -->

	<?php 

	$nome = $_COOKIE['cknome'];



	?>


	<section>
		<div class="container">

			<div class="row">

				<div class="col-md-2""></div>

				<div class="col-sm-12 col-md-8"">

					<form method="post" action="" id="formlogin" name="formlogin" class="formlog" style="margin-top: 100px;">


						<h5 style="font-size: 25px">Entrar</h5> <br><br>
						
						<div class="form-group">
							<label for="usuario">Usuário ou e-mail</label>
							<input type="text" name="usuario" id="usuario" required class="form-control campo"> 
						</div>

						<div class="form-group">
							<label for="senha">Senha</label>
							<input type="password" name="senha" id="senha" required class="form-control campo">
						</div>

						<input type="submit" name="btn-entrar" value="Entrar" class="btn btn-primary"> <br><br>

						<p id="errolog" class="alert alert-danger" style="display: none;">   </p>

					</form>

					<div style="text-align: center;">
						<a href="recuperar.php" class="txtlink">Esqueceu a senha?</a> <span style="color: #233d4f"> • </span>
						<a href="cadastro.php" class="txtlink">Quero ser um técnico!</a>
					</div>

				</div>

				<div class="col-md-2""></div>
			</div>

		</div>
	</section>




<!-- Atente-se para a ordem: primeiro jquery, depois locastyle, depois o JS do Bootstrap. -->
<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>