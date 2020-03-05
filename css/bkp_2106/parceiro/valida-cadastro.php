    <?php  //Valida cadastro técnico

    include("conexao.php");

    date_default_timezone_set('Brazil/East');

    
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['nascimento']; 
    $cpf = $_POST['cpf'];
    $email = $_POST['email']; 
    $destinatario = $email;
    $telefone = $_POST['telefone']; 

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];

    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];


    if ($sexo == 'M') {
            $msg = "Bem-Vindo";
        }

    if ($sexo == 'F') {
        $msg = "Bem-Vinda";
    }



    // DATA E HORA NO REGISTRO

    $agora = date('Y-m-d H:i');

    //EMAIL 

    $mensagem = "Olá, $nome! \n$msg ao Doutor Tech! \nÉ um prazer ter você no nosso time. \n \nAtt, Doutor Tech.";


    // CONSULTA ESTADO

    $validaestado = mysqli_query($con, "SELECT * FROM tb_cidades WHERE nome = '{$cidade}'") or print mysql_error();
    $res = mysqli_fetch_array($validaestado);
    $uf = $res['uf'];

    // INSERIR DADOS NO BANCO

    $string_sql = "INSERT INTO tb_tecnico (tecid, nome, sexo, usuario, senha, nascimento, cpf, email, telefone, endereco, numero, complemento, bairro, cidade, estado, dataregistro ) VALUES (null, '{$nome}','{$sexo}','{$usuario}','{$senha}','{$nascimento}','{$cpf}','{$email}','{$telefone}','{$endereco}','{$numero}','{$complemento}','{$bairro}','{$cidade}','{$uf}','{$agora}')";

    $insertskill = "INSERT INTO tb_skill (tecid, bkpwin, bkpmac, formwin, formmac, formbkpwin, formbkpmac, instwin, instmac, remwin, remmac, recwin, recmac, limpnote, limpdesk) VALUES ('{$cpf}', null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null)";


    $validaemail = mysqli_query($con, "SELECT * FROM tb_tecnico WHERE email = '{$email}'") or print mysql_error();
    $validacpf = mysqli_query($con, "SELECT * FROM tb_tecnico WHERE cpf = '{$cpf}'") or print mysql_error();
    $validausuario = mysqli_query($con, "SELECT * FROM tb_tecnico WHERE usuario = '{$usuario}'") or print mysql_error();


    
    if(mysqli_num_rows($validacpf)>0) {
        print "Já existe um usuário cadastrado com este CPF!";  
    }
    else


    if(mysqli_num_rows($validausuario)>0) {
         print "Este nome de usuário está em uso!";  
    }
    else {

    if($senha <> $confirmasenha) {
        print "As senhas informadas não conferem!";  
    }
    else
    
    if(mysqli_num_rows($validaemail)>0) {
        print "Já existe um usuário cadastrado com este e-mail";   
    }
     else {


            mysqli_query($con, $string_sql);
            mysqli_query($con, $insertskill);
            mail("$destinatario", "Bem-vindo ao Doutor Tech!", "$mensagem","From: naoresponda@doutor.tech");


            if(mysqli_affected_rows($con)>0){ 
                // print "Usuário registrado com sucesso!";
                echo "<script>location.href='termos.php'</script>";
            } else {
                print "Erro, não foi possível inserir no banco de dados";
            }
  

        }
        }    
    
  ?>
