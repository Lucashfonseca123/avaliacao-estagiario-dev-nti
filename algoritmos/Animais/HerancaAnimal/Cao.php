<?php 
	require_once('Mamifero.php');

	class Cao extends Mamifero{
		public function atacar(){
			echo "<br>Estou atacando, sou cachorro";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
		public function geral(){
			echo "<br> Sou cachorro";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
	}

 ?>