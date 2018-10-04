<?php 
	require_once('Ave.php');

	class Pato extends Ave{

		public function voar(){
		}

		public function geral(){
			echo "<br> Sou Pato ";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
	}

 ?>