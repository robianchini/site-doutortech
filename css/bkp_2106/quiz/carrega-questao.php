<?php 

	include("conexao.php");


	$query = "SELECT * FROM tb_questoes WHERE id_questao = 1";
	$buscaquestao = mysqli_query($con, $query);
	$rpes = mysqli_fetch_assoc($buscaquestao);

	$enunciado = $rpes['enunciado'];
	
	$A = $rpes['A'];
	$B = $rpes['B'];
	$C = $rpes['C'];
	$D = $rpes['D'];


	
	echo "<p>$enunciado</p>";
	echo "$A";
	echo "$B";
	echo "$C";
	echo "$D";



 ?>

