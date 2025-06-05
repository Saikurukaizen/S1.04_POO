<?php
declare(strict_types=1);


class Rectangulo extends Shape{
    
    public function calcularArea(): int{
        return $this->altura * $this->ancho;
    }
}
?>
