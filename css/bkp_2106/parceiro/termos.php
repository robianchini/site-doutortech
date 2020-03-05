<!DOCTYPE html>
<html>
<head>

	<title>Termos e Condições • Doutor Tech</title>

	<meta charset="utf-8">
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

	<!-- Script mascara campos formulario -->
	<link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">
	<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>

	<!-- Folha de estilos principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


				<script type="text/javascript">
					
					function ativar(){
						
						if(document.getElementById('checkbox').checked == true){
							document.getElementById('btnterm').disabled = ""
						}
						if(document.getElementById('checkbox').checked == false){
							document.getElementById('btnterm').disabled = "disabled"
						}
					}


					$(document).ready(function () {
				        setTimeout(function () {
				            $('#alerta-sucesso').fadeOut(1500);
				        }, 3000);
				    });

				</script>


</head>
<body class="" style="background-color: #eeeeee;">

    <div style="background-color: #233d4f; width: 100%; height: 50px; padding: 10px;"></div>

	<div class="container">
		<div class="row">

			<div class="col-md-2"></div>

			<div class="col-sm-12 col-md-8">
				<div id="alerta-sucesso" class="alert alert-success alert-dismissible" role="alert" style="margin-top: 30px">
				  O seu cadastro foi realizado com sucesso. <!-- Utilize o formulário abaixo para entrar! -->
				</div>
			</div>

			<div class="col-md-2"></div>

		</div>

		<div class="row">
			
			<div class="col-md-2"></div>

			<div class="col-sm-12 col-md-8">

				<form class="formlog" id="formterm" action="entrar.php">
					<label>Termos e condições</label> <br><br>
					<iframe src="contrato.html" class="box-tec" style="border-style: solid; border-color: #eeeeee;"></iframe> 
					<br><br>

					<div class="checkbox">
					    <label for="checkbox">
					      <input type="checkbox" name="checkboxes" id="checkbox" value="" onchange="ativar()">
					      Declaro que li, entendi e concordo com os termos e condições descritos acima.
					    </label>
					</div><br><br>

					<input name="btnterm" id="btnterm" type="submit" name="entrar" placeholder="Entrar" class="btn btn-primary" value="Concluir" disabled="">
				</form>
			</div>
		<div class="col-md-2"></div>
	</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>