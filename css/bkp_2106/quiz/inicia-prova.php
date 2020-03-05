<?php 


	// CONFIGURAÇÃO DE CONEXÃO
	include("conexao.php");

	$id = mysqli_query($con,"SELECT MAX(id_prova) FROM tb_provas");

	$resultado = fetch_assoc($id);

	echo $resultado['id_prova'];


    //CONFIGURA NOVA PROVA
    date_default_timezone_set('Brazil/East');
    $agora = date('Y-m-d H:i:s');
	$nome = "Nome";

	$string_sql = "INSERT INTO tb_provas (id_prova, nome_tec, data_inicio) VALUES (null, '{$nome}','{$agora}')";

	//mysqli_query($con, $string_sql);



 ?>