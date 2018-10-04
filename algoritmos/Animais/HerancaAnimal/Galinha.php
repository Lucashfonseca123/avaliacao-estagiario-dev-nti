<?php 
	require_once('Ave.php');

	class Galinha extends Ave{
		public function geral(){
			echo "<br> Sou galinha ";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
	}

 ?>