<?php
	include "Classes/contato.class.php";
	$contato = new Contato();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<title>CRUDOO NA PRÁTICA</title>
	</head>
	<body>
		<section>
			<span>Contatos</span>
		</section>
		<section class="tabelaSeviçCliente">

			<div class="divTabelaServiço">

				<a class="adicionar" href="Views/adicionar.php">ADICIONAR</a><br><br>
			
				<table border="1" class="table">
					<tr>
						<th>ID</th>
						<th>NOME</th>
						<th>E-MAIL</th>
						<th>AÇÕES</th>
					</tr>

					<?php
						$lista = $contato->getAll();
						foreach ($lista as $item):
					?>
						<tr>
							<td><?php echo $item['id']; ?></td>
							<td><?php echo $item['nome'];?></td>
							<td><?php echo $item['email'];?></td>
							<td>
								<a class="editar" href="Views/editar.php?id=<?php echo $item['id']; ?>">EDITAR</a>
								<a class="excluir" href="Controllers/excluirController.php?id=<?php echo $item['id'];?>">EXCLUIR</a>
							</td>
						</tr>
					<?php endforeach;?>
				</table>	
			</div>
		</section>
	</body>
</html>