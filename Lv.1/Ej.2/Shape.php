<?php
declare(strict_types=1);

class Shape{
    protected int $altura;
    protected int $ancho;

    public function __construct(int $altura, int $ancho){
        $this->altura = $altura;
        $this->ancho = $ancho;
    }
}

?>