<?php 
    require_once ('Animal.php');
	require_once ('Mamifero.php');
	require_once ('Ave.php');
	require_once ('Cao.php');
	require_once ('Gato.php');
	require_once ('Elefante.php');
	require_once ('Cavalo.php');
	require_once ('Pato.php');
	require_once ('Galinha.php');
	require_once ('Andorinha.php');
	
	$mamute = new Elefante();
	$mamute->geral();

	$dog = new Cao();
	$dog->atacar();
	$dog->geral();

	$tom = new Gato();
	$tom->geral();

	$donald = new Pato();
	$donald->geral();

	$horse = new Cavalo();
	$horse->geral();

	$frango = new Galinha();
	$frango->geral();

	$passaro = new Andorinha();
	$passaro->geral();

	
 ?>