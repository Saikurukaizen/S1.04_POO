<?php
declare(strict_types=1);

abstract class Shape{
    protected int $altura;
    protected int $ancho;

    public function __construct(int $altura, int $ancho){
        $this->altura = $altura;
        $this->ancho = $ancho;
    }

    abstract public function calcularArea(): int;
}

?>