<?php
declare(strict_types=1);

class Pelicula{
    private string $nombre;
    private int $duracion;
    private string $director;

    public function __construct(string $nombre, int $duracion, string $director){
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getDuracion(): float{
        return $this->duracion;
    }

    public function getDirector(): string{
        return $this->director;
    }
    public function __toString(): string{
        return "Nombre: " . $this->nombre .
               "Duración: " . (string)$this->duracion .
               "Director: " . $this->director . " " . PHP_EOL;
    }
}

?>