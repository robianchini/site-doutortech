<?php 


	include("conexao.php");
	
    $credencial = $_POST['usuario'];
    $senha = $_POST['senha']; 


    $validalogin = mysqli_query($con, "SELECT * FROM tb_tecnico WHERE (usuario = '{$credencial}' OR email = '{$credencial}') AND senha = '{$senha}'");

    $rpes = mysqli_fetch_assoc($validalogin);
    $nome = $rpes['nome'];
    $sexo = $rpes['sexo'];
    $usuario = $rpes['usuario'];

    $email = $rpes['email'];
    $telefone = $rpes['telefone'];
    $cpf = $rpes['cpf'];
    $cidade = $rpes['cidade'];

    if(mysqli_num_rows($validalogin)<=0) {
        
        print "Usuário ou senha inválidos";   
    }

        else {

        setcookie("cktecnome",$nome);
        setcookie("cktecsexo",$sexo);
        setcookie("cktecuserid",$userid);
        setcookie("cktecusuario",$usuario);
        setcookie("cktecemail",$email);
        setcookie("cktectelefone",$telefone);
        setcookie("ckteccpf",$cpf);
        setcookie("ckteccidade",$cidade);
        setcookie("cktecperfil","tecnico");
        echo "<script>location.href='home.php'</script>";
    } 





 ?>