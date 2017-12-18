<!DOCTYPE html>
<html>
	<head>
		<title>Escrevendo email</title>
	</head>
	<body>
		<form action="enviar_email.php" method="POST">
			<label for="de">De:</label>
			<input type="text" name="email_send" id="de"><br><br>
			<label for="para">Para:</label>
			<input type="text" name="email_received" id="para"><br><br>
			<label for="descricao">Mensagem:</label>
			<textarea name="mensagem" cols="40" rows="8" id="descricao"></textarea><br><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>