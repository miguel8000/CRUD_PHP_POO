<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estiloAdicionar.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<title>CRUDOO NA PRÁTICA</title>
	</head>
	<body>
		<section>	
			<span>ADICIONAR</span>
		</section>
		<section>
			<div>	
				<form method="POST" action="../Controllers/adicionarController.php">
					<input class="barra" type="text" name="nome" placeholder="Nome"><br><br>

					<input class="barra" type="email" name="email" placeholder="E-mail"><br><br>

					<input class="botao" type="submit" name="ADICIONAR">
				</form>
			</div>
		</section>
	</body>
</html>		