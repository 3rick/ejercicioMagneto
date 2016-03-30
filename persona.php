<?php
	class Persona {
		private $adn;
		private $conteoSecuencias = 0;
		private $secuenciaHor;
		private $secuenciaVer;
		private $secuenciaObl;
		
		public function isMutant($dna)
		{
			// inicializamos nuestros valores del dna en un arreglo llamado adn (matriz de valores)
			foreach($dna as $clave => $valor)
			{
				$arr1 = str_split($valor);
				
				for($z=0; $z<count($arr1); $z++)
				{
					$this->adn[$clave][$z] = $arr1[$z];
				}
			}
			
			// valores iniciales para buscar oblicuamente
			$this->secuenciaObl = ["A" => 0, "T" => 0, "C" => 0, "G" => 0];
			
			// recorremos todo el adn, buscando secuencias
			for($x=0;$x<count($this->adn);$x++)
			{
				// valores iniciales para buscar horizontalmente
				$this->secuenciaHor = ["A" => 0, "T" => 0, "C" => 0, "G" => 0];
				
				// valores iniciales para buscar verticalmente
				$this->secuenciaVer = ["A" => 0, "T" => 0, "C" => 0, "G" => 0];
				
				for($y=0; $y<count($this->adn); $y++)
				{
					// recorremos los posibles valores a encontrar (horizontalmente) y aumentamos su contador al encontrarlos
					foreach ($this->secuenciaHor as $clave => $valor)
					{
						if($this->adn[$x][$y] == $clave)
						{
							$this->secuenciaHor[$clave]++;
						}
					}
					
					// recorremos los posibles valores a encontrar (verticalmente) y aumentamos su contador al encontrarlos
					foreach ($this->secuenciaVer as $clave => $valor)
					{
						if($this->adn[$y][$x] == $clave)
						{
							$this->secuenciaVer[$clave]++;
						}
					}
				}
				
				// si encontramos 4 letras iguales en una secuancia (horizontal) aumentamos el contador de secuencias
				if($this->secuenciaHor["A"] >=4 || $this->secuenciaHor["T"] >= 4 || $this->secuenciaHor["C"] >=4 || $this->secuenciaHor["G"] >= 4)
				{
					$this->conteoSecuencias++;
				}
				
				// si encontramos 4 letras iguales en una secuancia (vertical) aumentamos el contador de secuencias
				if($this->secuenciaVer["A"] >=4 || $this->secuenciaVer["T"] >= 4 || $this->secuenciaVer["C"] >=4 || $this->secuenciaVer["G"] >= 4)
				{
					$this->conteoSecuencias++;
				}
				
				// recorremos los posibles valores a encontrar (oblicuamente) y aumentamos su contador al encontrarlos
				foreach ($this->secuenciaObl as $clave => $valor)
				{
					if($this->adn[$x][$x] == $clave)
					{
						$this->secuenciaObl[$clave]++;
					}
				}
			}
			
			// si encontramos 4 letras iguales en secuancia (oblicua) aumentamos el contador de secuencias
			if($this->secuenciaObl["A"] >=4 || $this->secuenciaObl["T"] >= 4 || $this->secuenciaObl["C"] >=4 || $this->secuenciaObl["G"] >= 4)
			{
				$this->conteoSecuencias++;
			}
			
			// imprimimos el contador de secuencias
			// echo "<br>".$this->conteoSecuencias."<br>";
			
			if($this->conteoSecuencias > 1)
			{
				echo "MUTANTE";
			}
			else
			{
				echo "NO-MUTANTE";
			}
		}
	}
?>