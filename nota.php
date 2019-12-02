<!DOCTYPE html>
<html>
<head>
	<title>Nota</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Resultado do aluno</h1>
	<?php
		//importar a classe Aluno
		require_once("aluno.php");
		$nota1 = floatval($_POST["nota1"]);
		$nota2 = floatval($_POST["nota2"]);
		$nota3 = floatval($_POST["nota3"]);
		//instanciar o objeto
		$aluno = new Aluno();
		//calcular a média
		$media = $aluno->media($nota1, $nota2, $nota3);
		//apresentar a média
		if(!$media)
		{
			echo "Ocorreu um erro";
		}
		else
		{
			echo "A média é: $media";
		}
	?>
	<br>
	<a href="form.php">Voltar</a>
</body>
</html>