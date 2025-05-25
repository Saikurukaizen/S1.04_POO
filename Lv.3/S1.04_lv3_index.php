<?php
declare(strict_types=1);

require_once './S1.04_lv3_cinema.php';
require_once './S1.04_lv3_pelicula.php';

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

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Catálogo de Películas</title>
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-semibold text-center">Catálogo de Películas</h1>
        <div class="mt-5">
            <h2 class="text-xl font-semibold text-center">Nombre: <?php echo $cine1->getNombre();?></h2>
            <p class="text-center">Ubicación: <?php echo $cine1->getPoblacion();?></p>
            <h2>Peliculas</h2>
            <ul class="list-disc pl-5">
                <?php foreach($cine1->getPeliculas() as $pelicula): ?>
                <li class="text-gray-600">
                    <?php echo $pelicula;?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
</body>
</html> -->
