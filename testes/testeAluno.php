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
			$this->assertEqual($aluno->media(5.0,10.0,10.0),9.0);
			$this->assertEqual($aluno->media(10.0,10.0,5.0),7.5);			
			//teste de 0 a 10
			$this->assertEqual($aluno->media(11.0,6.0,7.0),false);
			$this->assertEqual($aluno->media(10.0,11.0,7.0),false);
			$this->assertEqual($aluno->media(10.0,10.0,11.0),false);
			$this->assertEqual($aluno->media(-1.0,6.0,7.0),false);
			$this->assertEqual($aluno->media(1.0,-6.0,7.0),false);
			$this->assertEqual($aluno->media(1.0,6.0,-7.0),false);
			//letras
			$this->assertEqual($aluno->media("A",6.0,5.0),false);
			$this->assertEqual($aluno->media(6.0,"B",5.0),false);
			$this->assertEqual($aluno->media(4.0,6.0,"C"),false);
			//null
			$this->assertEqual($aluno->media(4.0,6.0,""),false);
			$this->assertEqual($aluno->media(4.0,6.0,null),false);
			$this->assertEqual($aluno->media(4.0,null,5.0),false);
			$this->assertEqual($aluno->media(null,4.0,5.0),false);
			//quebrado
			$this->assertEqual($aluno->media(6.44,3.0,10.0),7.2);
			//teste com vírgula
			$this->assertEqual($aluno->media("10,0","9,5","5,0"),7.4);
			$this->assertEqual($aluno->media(10.0,9.5,5.0),7.4);
		}
	}

?>