<?php
	//importar o arquivo do simpletest
	require_once("../simpletest/autorun.php");
	// importar a classe aluno
	require_once("../aluno.php");

	//extends = importação de metodos
	class testeAluno extends UnitTestCase
	{
		function testeMedia()
		{
			//instaciar objeto
			$aluno = new Aluno();
			//casos de teste da URI
			$this->assertEqual($aluno->media(5.0,6.0,7.0),6.3);
		}
	}

?>