<?php
require 'config.php';
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		
	</head>
	<body>
		
		<h1>Usuários</h1>

		<table border="1" width="600">
			<?php foreach($usuarios as $usuario): ?>
			<tr
			data-nome="<?php echo $usuario['nome']; ?>" 
			data-email="<?php echo $usuario['email']; ?>"
			data-senha="<?php echo $usuario['senha']; ?>" 
			data-id="<?php echo $usuario['id']; ?>">
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><?php echo $usuario['senha']; ?></td>
				<td>
					<a href="javascript:;" onclick="editar(this)">Editar</a>
					<a href="javascript:;" onclick="excluir('<?php echo $usuario['id'] ?>')">Excluir</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<div id="modal-editar" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<form method="POST">
						Nome:<br/>
						<input type="text" name="nome" /><br/><br/>

						Email:<br/>
						<input type="text" name="email" /><br/><br/>

						Senha:<br/>
						<input type="text" name="senha" /><br/><br/>
						
						<input type="hidden" name ="id" />
						
						<input type="submit" value="Salvar" />
	</form>
					</div>
				</div>
			</div>
		</div>

		<div id="modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">...</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>