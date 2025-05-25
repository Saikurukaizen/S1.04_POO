<?php
declare(strict_types=1);

//EJ.1

class Employee{

    private string $nombre;
    private int $sou;

    public function __construct(string $nombre, int $sou){
        $this->nombre = $nombre;
        $this->sou = $sou;
    }

    public function print(): void{
        if($this->sou <= 6000){
            echo '<h2>El empleado '.$this->nombre.' no ha de pagar impuestos</h2>';
        }
        else{
            echo '<h2>El empleado '.$this->nombre.' ha de pagar impuestos</h2>';
        }
    }
}

$empleado1 = new Employee('José', 5000);
$empleado1->print();

//EJ.2

class Shape{
    protected int $altura;
    protected int $ancho;

    public function __construct(int $altura, int $ancho){
        $this->altura = $altura;
        $this->ancho = $ancho;
    }
}

class Triangulo extends Shape{

    public function __construct(int $altura, int $ancho){
        parent::__construct($altura, $ancho);
    }

    public function calcularArea(): int{
        return ($this->altura * $this->ancho) / 2;
    }
}

class Rectangulo extends Shape{
    public function __construct(int $altura, int $ancho){
        parent::__construct($altura, $ancho);
    }

    public function calcularArea(): int{
        return $this->altura * $this->ancho;
    }
}

$triangulo = new Triangulo(5, 8);
$rectangulo = new Rectangulo(7, 12);

$areaTri = $triangulo->calcularArea();
echo '<h2>El área del triángulo es: '.$areaTri.'</h2>';

$areaRec = $rectangulo->calcularArea();
echo '<h2>El área del rectángulo es: '.$areaRec.'</h2>';

?>