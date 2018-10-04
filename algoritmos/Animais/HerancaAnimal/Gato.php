<?php 
	require_once ('Mamifero.php');

	class Gato extends Mamifero{
		public function geral(){
			echo "<br> Sou gato";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
	}
 ?>