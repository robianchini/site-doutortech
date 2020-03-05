<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Atualizar -->
    <meta http-equiv="refresh" content="15">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- Folha de estilos principal -->
    <link rel="stylesheet" href="style.css">

    <title>Chamados Abertos • Doutor Tech</title>


    <style type="text/css">

    /* Smartphones */
    @media  (max-width: 480px) {  

      .form{
      
      background-color: #fdfdfd;
      padding: 20px;
      border-radius: 10px;
      width: 700px;
      }

      .hdr{
        background-color: #233d4f;
        width: 100%;
        padding: 10px;
        width: 705px;
      }

      .resp{
        font-size: 9px;
        width: 100%;
      }

    }

    /* Computadores */
   @media (min-width: 500px) {  

      .form{
      margin: 20px;
      background-color: #fdfdfd;
      padding: 20px;
      border-radius: 10px;
     }

     .hdr{
        background-color: #233d4f;
        width: 100%;
        padding: 10px;
      }
    }

    </style>


  </head>
  <body style="background-color: #eeeeee">


    <?php 

      $nome = $_COOKIE['cktecnome'];

      if ($nome == "") {
        echo "<script>location.href='entrar.php'</script>"; }
      ?>


    <div class="hdr">
            <a href="home.php" class="btn btn-primary"><i class="fas fa-home"></i></a>
    </div>

  <br><br><br>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">

          <form class="form">

            <h6 style="font-size: 25px;">Temos este chamado para você:</h6><br>        

              <table class="table table-hover resp">
                <thead>
                  <tr>
                    <th scope='col'> Protocolo </th>
                    <th scope='col'> Dada da Solicitação</th>
                    <th scope='col'> Status do Chamado</th>
                    <th scope='col'> Dispositivo</th>
                    <th scope='col'> Serviço</th>
                    <th scope='col'>  </th>
                  </tr>
                </thead>

                <?php
                  include("conexao.php");

                  $cpf = $_COOKIE['ckteccpf'];
                  $cidade = $_COOKIE['ckteccidade'];

                  $bkpwin = $res['bkpwin'];
                  $bkpmac = $res['bkpmac'];
                  $formwin = $res['formwin'];
                  $formmac = $res['formmac'];
                  $formbkpwin = $res['formbkpwin'];
                  $formbkpmac = $res['formbkpmac'];
                  $instwin = $res['instwin'];
                  $instmac = $res['instmac'];
                  $remwin = $res['remwin'];
                  $remmac = $res['remmac'];
                  $recwin = $res['recwin'];
                  $recmac = $res['recmac'];
                  $limpnote = $res['limpnote'];
                  $limpdesk = $res['limpdesk'];



                  $consulta = mysqli_query($con, "SELECT * FROM tb_chamado WHERE (cidade = '{$cidade}' AND status = 'Aguardando atendimento'  ) ORDER BY datasolicitacao asc LIMIT 1") or print mysql_error();


                  if(mysqli_num_rows($consulta)<=0) {
        
                      print "Nenhum chamado disponível no momento! Por favor, volte mais tarde!";   
                  }

                  else {


                  while ($dados = mysqli_fetch_array($consulta)) {
                  $url = $dados['protocolo'];

                    echo "<tr>";
                      echo "<td>";
                        echo $dados['protocolo'];
                      echo "</td>";
                      echo "<td>";
                        echo $dados['datasolicitacao'];
                      echo "</td>";
                      echo "<td>";
                        echo $dados['status'];
                      echo "</td>";
                      echo "<td>";
                        echo $dados['dispositivo'] . ' ' . $dados['sistema'];
                      echo "</td>";
                      echo "<td>";
                        echo $dados['servico'];
                      echo "</td>";
                      echo "<td>";
                        //echo "<button title='Atender chamado' class='btn btn-success btn-sm'>Atender Chamado</button>&nbsp";
                        echo "<a href='atender.php?protocolo=$url' class='btn btn-success btn-sm'> Atender Chamado</a>";
                      echo "</td>";
                    echo "</tr>";
                  }
                }
                  ?>
              </table>       
          </form>

          

        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>