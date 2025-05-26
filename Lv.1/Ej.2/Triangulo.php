<?php
declare(strict_types=1);

class Triangulo extends Shape{

    public function __construct(int $altura, int $ancho){
        parent::__construct($altura, $ancho);
    }

    public function calcularArea(): int{
        return ($this->altura * $this->ancho) / 2;
    }
}
?>