<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}


setcookie("cktecnome");
setcookie("cknome");
setcookie("cktecsexo");
setcookie("cktecuserid");
setcookie("cktecusuario");
setcookie("cktecemail");
setcookie("cktectelefone");
setcookie("ckteccpf");
setcookie("ckteccidade");
setcookie("cktecperfil");


$ref= @$_GET['q'];
$ref = "entrar.php";
header("location:$ref");
?>