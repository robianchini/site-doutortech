<!DOCTYPE html>
<html>
<head>
	
  <title>Novo Técnico • Doutor Tech</title>

  <meta charset="utf-8">
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


  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <!-- Script mascara campos formulario -->
  <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">
  <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/edge/javascripts/locastyle.js"></script>

  <!-- Folha de estilos principal -->
  <link rel="stylesheet" href="../app/style.css">

  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#formcad').submit(function(){
        var dados = jQuery(this ).serialize();

        jQuery.ajax({
          type: "POST",
          url: "valida-cadastro.php",
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
  	

  	.disabled{
  		background-color: #d4edda;
  		color: #155724;
  	}

  </style>


</head>

<body>


 <div style="background-color: #eeeeee">
  
    <div style="background-color: #233d4f; width: 100%; height: 50px; padding: 10px;"></div>


    <div class="container" >
      <div class="row">


        <div class="col-sm-12 col-md-12">

        <form name="formcad" id="formcad" method="post" action="" class="formcad" style="padding: 35px; margin-top: 40px;">

            <h6 style="font-size: 25px">Dados Pessoais</h6><br>


            <div class="input-group">
            	<span class="input-group-addon" id="basic-addon1">Nome</span>
            	<input type="text" name="nome" placeholder="Insira o seu nome" class="form-control campo" required > 
        	  </div>
            <br><br>

            <div class="input-group">
				      <span class="input-group-addon" id="basic-addon1">Sexo</span>
	            <select name="sexo" class="custom-select form-control campo" id="estado" onChange="getStates(this);"  required>
                <option value="">Selecione...</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
              </select>
  	        </div>
  	        <br><br>

            
            <div class="input-group">
            	<span class="input-group-addon" id="basic-addon1">Data de nascimento</span>      
            	<input placeholder="Insira a sua data de nascimento" id="" type="text" class="form-control campo date-mask" autocomplete="off" name="nascimento" required>
            </div>
            <br><br>

            <div class="input-group">
            	<span class="input-group-addon" id="basic-addon1">CPF</span>      
            	<input placeholder="Insira o seu CPF" id="" type="text" class="form-control campo cpf-mask" autocomplete="off" name="cpf" required> <br><br>
            </div>
            <br><br>

            <div class="input-group">
           		<span class="input-group-addon" id="basic-addon1">E-mail</span>    
            	<input type="text" name="email" placeholder="Insira o seu e-mail" class="form-control campo" required>
            </div>
           	<br><br>


            <div class="input-group">
            	<span class="input-group-addon" id="basic-addon1">Telefone</span>      
            	<input id="telefone" type="text" name="telefone" placeholder="Insira o seu telefone" class="form-control campo cel-sp-mask" required>
            </div>
            <br><br>

            <h6 style="font-size: 25px">Dados de Acesso</h6><br>



            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Usuário</span>              
              <input type="text" name="usuario" placeholder="Insira um nome de usuário" class="form-control campo" required> 
            </div>
            <br><br>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Senha</span>  
              <input type="password" name="senha" placeholder="Insira a sua senha" class="form-control campo" required> 
            </div>
            <br><br>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Confirmação</span>  
              <input type="password" name="confirmasenha" placeholder="Confirme a sua senha" class="form-control campo" required> 
            </div>
            <br><br>

             <h6 style="font-size: 25px">Endereço</h6><br>

            <p> <b>IMPORTANTE:</b> preencha seus dados corretamente, pois eles serão necessários para o recebimento de chamados. </p><br>


            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Endereço</span>
              <input type="text" name="endereco" placeholder="Insira o seu endereço" class="form-control campo" required >
            </div><br>
              
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Número</span>
              <input type="text" name="numero" placeholder="Insira o número da sua residência" " class="form-control campo" required>
           </div><br>

            <div class="input-group">
             <span class="input-group-addon" id="basic-addon1">Complemento</span>
              <input type="text" name="complemento" placeholder="Insira o complemento do seu endereço" class="form-control campo"> 
            </div><br>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Bairro</span>
              <input type="text" name="bairro" placeholder="Insira o seu bairro" class="form-control campo" required>
            </div><br>

            

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Cidade</span>
              <select name="cidade" class="custom-select form-control campo" id="cidade" onChange="getStates(this);"  required>
                <option value="">Selecione...</option>
                <?php 
                
                  include("conexao.php");

                  $buscaestados =  mysqli_query($con, "SELECT * FROM tb_cidades") or print mysql_error();

                 while($row = mysqli_fetch_array($buscaestados)){
                   $idUF = $row["nome"];
                   $uf = $row["uf"];

                   echo "<option value='$idUF'>$uf - $idUF</option>";
                 }
                 ?>
              </select>
            </div> <br>     


            <input name="enviar" type="submit" style="float: right;" class="btn btn-primary" value="Cadastrar"><br><br><br>

            <p id="errolog" class="alert alert-danger" style="display: none;">   </p>

          </form>
        </div>
      </div>
    </div>
    </div>

  </section>







<!-- Atente-se para a ordem: primeiro jquery, depois locastyle, depois o JS do Bootstrap. -->
<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>
</html>