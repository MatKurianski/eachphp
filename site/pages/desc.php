 <html lang=”pt-br”>
 <meta charset=”UTF-8”>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
 <html lang=”pt-br”>
 <meta charset=”UTF-8”>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<head>
  <title>COMIDINHAS - EACH USP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/desc.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<div id="nav-placeholder"> </div>
	<script>
	$(function(){
	  $("#nav-placeholder").load("../resources/nav.php");
	});
	</script>
<br>
<?php
	require '../resources/config.php';
	$conn = mysqli_connect($host, $user, $password, $bd);

	if($conn === false){
    die("Um erro interno inesperado aconteceu. " . mysqli_connect_error());
	}

	mysqli_set_charset($conn,"utf8"); 

	$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
	
	$sql = mysqli_query($conn, "SELECT * FROM produtos WHERE id=$id;");
	$dados = mysqli_fetch_array($sql);

	$sql = mysqli_query($conn,"SELECT * FROM vendedor WHERE usuario='".$dados['Usuario']."'") or die (mysqli_error($conn));
	$dadosVend = mysqli_fetch_array($sql);

	echo ("<center>
		<div class=\"col-md-8 col-sm-8 p-3\">
					<div class=\"card text-center\" > 
						<div class=\"card-block box shadow\" >
							<div class=\"card-title\"> 
								<h1 class=\"card-title-text\">{$dados['Nome']}<h5>(de {$dados['Vendedor']})</h5></h1>
							</div>
							<img src=\"produtos/{$dados['id']}.jpg\" class=\"img-fluid\" style=\"width: 30%;\">
								
							<div class=\"card-text\">
								
								<span style=\"color: #fdb523; font-weight: bold;\">Descrição rápida: </span><br>".nl2br($dados['Descricao'])."<br>
								<span style=\"color: green; font-weight: bold;\">Preço: </span> R$ {$dados['Preco']}<br>
								<span style=\"color: blue; font-weight: bold;\">Local: </span>{$dadosVend['local']}<br>
								<span style=\"color: red; font-weight: bold;\">Vendedor: </span>{$dados['Vendedor']}<br>
								<a style=\"margin-top: 10px;\" href=\"../../index.php\" name=\"id\" id=\"id\" class=\"btn btn-primary\"><span style=\"font-size: 20px;\">Voltar</span></a>

								
								<br><br>
							</div>
						</div>
					</div>
				</div>
				
				</center>");
?>

