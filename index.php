<?php 
//var_dump($_GET);//imprime as informações de uma variavel
//die;//para o sistema neste ponto

/*AQUI ABRE CONEXÃO COM O BANCO, uma especie de porta que comunica
o banco de dados com o sistema*/
$BD = mysqli_connect('gk90usy5ik2otcvi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','vkdb3vzev6ek31bz','jcwhpls9hwxlk2ed','c2v4lib3jdfo3hs7') ; 
$page = $_GET["page"];

?>

<DOCTYPE HTML!>
<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">

    <!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body class="container">

    <H1> Desafio Web</H1>
    <!-- criaando um menu -->

<nav class="navbar navbar-default " id="menu">
	<ul class="nav navbar-nav">
		<li><a href="?page=list">Lista de Mercadoria</a></li>
		<li><a href="?page=mercadoria">Requisição de Mercadoria </a></li>
	</ul>
</nav>
<?php
include($page.".php");
?>
   
  </body>
</html>