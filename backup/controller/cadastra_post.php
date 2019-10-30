<!DOCTYPE html>
<html>
	<head>
		<title>Escrevendo email</title>
	</head>
	<body>
		<form action="gerencia_post.php" method="POST" form enctype="multipart/form-data">
			<label for="titulo">Titulo da publicação:</label>
			<input type="text" name="titulo" id="titulo"><br><br>
			<label for="descricao">Descrição:</label>
			<textarea name="mensagem" cols="40" rows="8" id="descricao"></textarea><br><br>
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
			<label for="img">Adicionar imagem:</label>
			<input type="file" name="img" id="img">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>