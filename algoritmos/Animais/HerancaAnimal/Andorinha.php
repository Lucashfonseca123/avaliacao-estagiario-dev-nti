<?php 
	require_once('Ave.php');
	class Andorinha extends Ave{
		public function voar(){
		}
		public function geral(){
			echo "<br> Sou Andorinha ";
			echo parent::geral(). "<br>";
			echo Animal::geral(). "<br>";
		}
	}
 ?>