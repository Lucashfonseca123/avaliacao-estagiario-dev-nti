<?php 
	require_once ('Mamifero.php');

	class Elefante extends Mamifero{
		
		public function comer(){
			echo "Classe Elefante, come diferente";
			}

		public function geral(){
			echo "<br> Sou Elefante";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
		}

 ?>