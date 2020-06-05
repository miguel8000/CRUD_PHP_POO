<?php
	include "../Classes/contato.class.php";
	$contato = new Contato();

	if (!empty($_GET['id'])) {
		$id = $_GET["id"];

		$info = $contato->getInfo($id);
	}else{
		header("Location: ../index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estiloEditar.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<title>CRUDOO NA PRÁTICA</title>
	</head>
	<body>
		<section>
			<span>EDITAR</span>
		</section>

		<section>
			<div>
				<form method="POST" action="../Controllers/editarController.php">
			<input type="hidden" name="id" value="<?php echo $info['id'];?>">

			<input type="text" class="barra" name="nome" placeholder="Nome" value="<?php echo $info['nome'];?>"><br><br>

			<input type="email" class="barra" name="email" placeholder="E-mail" value="<?php echo $info['email'];?>"><br><br>

			<input type="submit" class="botao" name="SALVAR">
		</form>
			</div>
		</section>
	</body>	
</html>	