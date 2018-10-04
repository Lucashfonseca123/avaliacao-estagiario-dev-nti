<?php 
	require_once('Mamifero.php');

	class Cavalo extends Mamifero{
		public function geral(){
			echo "<br> Sou cavalo";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
	}
 ?>