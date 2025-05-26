<?php
declare(strict_types=1);

require_once './Shape.php';
require_once './Triangulo.php';
require_once './Rectangulo.php';


$triangulo = new Triangulo(5, 8);
$rectangulo = new Rectangulo(7, 12);

$areaTri = $triangulo->calcularArea();
echo '<h2>El área del triángulo es: '.$areaTri.'</h2>' . PHP_EOL;

$areaRec = $rectangulo->calcularArea();
echo '<h2>El área del rectángulo es: '.$areaRec.'</h2>' . PHP_EOL;

?>