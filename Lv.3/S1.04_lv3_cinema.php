<?php
declare(strict_types=1);

require_once './S1.04_lv3_pelicula.php';

class Cinema{
    private string $nombre;
    private string $poblacion;
    private array $peliculas;

    public function __construct(string $nombre, string $poblacion, array $peliculas){
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = [];
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getPoblacion(): string{
        return $this->poblacion;
    }

    public function getPeliculas(): array{
        return $this->peliculas;
    }

    public function addPelicula(array $peliculas): void{
        foreach($peliculas as $pelicula){
            if($pelicula instanceof Pelicula){
                $this->peliculas[] = $pelicula;
            } else {
                throw new Exception("Error: No es una película válida");
            }
        }
    }

    public function mostrarPeliculas(): void{
        echo "Películas que disponemos en " .$this->nombre. " en " .$this->poblacion. PHP_EOL;
        foreach($this->peliculas as $pelicula){
            echo $pelicula->__toString() . PHP_EOL;
        }
    }

    public function peliculaMasLarga(): void{
        if(empty($this->peliculas)){
            throw new Exception("Error: No hay peliculas en este cine");
        }
        $peliculaMasLarga = $this->peliculas[0];
        foreach($this->peliculas as $pelicula){
            if($pelicula->getDuracion() > $peliculaMasLarga->getDuracion()){
                $peliculaMasLarga = $pelicula;
            }
        }
        echo "La película más larga es: " . $peliculaMasLarga->getNombre() . " con una duración de " . $peliculaMasLarga->getDuracion() . " minutos." . PHP_EOL;        
    }

    public function buscarDirector(string $director): array{
        $peliculasEncontradas = [];
        foreach($this->peliculas as $pelicula){
            if($pelicula->getDirector() === $director){
                $peliculasEncontradas[] = $pelicula;
            }           
        }
        if(empty($peliculasEncontradas)){
            throw new Exception("Error: El director no puede ser nulo o vacío");
        }
        return $peliculasEncontradas;
    }
}
?>