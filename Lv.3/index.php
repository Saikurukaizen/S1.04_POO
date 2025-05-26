<?php
declare(strict_types=1);

require_once './Cinema.php';
require_once './Pelicula.php';

$cine1 = new Cinema("Cinepolis", "Madrid", []);
$cine2 = new Cinema("Cinesa", "Barcelona", []);
$cine3 = new Cinema("Yelmo", "Valencia", []);


$pelicula1 = new Pelicula("Avatar", 180, "James Cameron");
$pelicula2 = new Pelicula("Titanic", 120, "James Cameron");
$pelicula3 = new Pelicula("Inception", 200, "Christopher Nolan");

$cine1->addPelicula([$pelicula1]);
$cine1->addPelicula([$pelicula2]);
$cine1->addPelicula([$pelicula3]);

$cine2->addPelicula([$pelicula1]);

$cine3->addPelicula([$pelicula2]);
$cine3->addPelicula([$pelicula3]);

$cine1->MostrarPeliculas();
$cine2->MostrarPeliculas();
$cine3->MostrarPeliculas();

$cine1->buscarDirector("James Cameron");

$peliculaMasLarga = $cine1->peliculaMasLarga();
$peliculaMasLarga = $cine2->peliculaMasLarga();
$peliculaMasLarga = $cine3->peliculaMasLarga();
?>


