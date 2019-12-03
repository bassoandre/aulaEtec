<?php
	class Aluno
	{
		function media($a, $b, $c)
		{	
			$a = str_replace(",",".",$a);
			$b = str_replace(",",".",$b);
			$c = str_replace(",",".",$c);
			
			if((!(is_numeric($a))) || (!(is_numeric($b))) || (!(is_numeric($c))))
			{
				return false;
			}			

			if(($a > 10) || ($b > 10) || ($c > 10) || ($a < 0) || ($b < 0) || ($c < 0))
			{
				return false;
			}
		
			
			$media = $a * 0.2 + $b * 0.3 + $c * 0.5;
			$media = round($media,1);
			return $media;
					
		}
	}
?>