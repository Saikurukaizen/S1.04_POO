<?php

$empleado = new Employee('José', 5000);
$empleado->Print();

class Employee{
    public $nom;
    public $sou;

    public function __construct($nom, $sou){
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function Print(){
        if($this->sou > 6000){
            echo '<h2>El empleado '.$this->nom.' ha de pagar impuestos</h2>';

        }
        else{
            echo '<h2>El empleado '.$this->nom.' no ha de pagar impuestos</h2>';

        }
    }
}

$rectangulo = new Rectangulo(7, 12);
$triangulo = new Triangulo(5, 8);

$rectangulo->Area();
$triangulo->Area();

class Shape{
    public $altura;
    public $ancho;

    public function __construct($altura, $ancho){
        $this->altura = $altura;
        $this->ancho = $ancho;
    }
}

class Rectangulo extends Shape{
    public function Area(){
        $areaRec = $this->altura * $this->ancho;
        echo '<h2>El área del rectángulo es: '.$areaRec.'</h2>';
    }
}

class Triangulo extends Shape{
    public function Area(){
        $areaTri = ($this->altura * $this->ancho) / 2;
        echo '<h2>El área del triángulo es: '.$areaTri.'</h2>';
    }
}

?>