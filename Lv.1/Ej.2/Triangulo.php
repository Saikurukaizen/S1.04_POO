<?php
declare(strict_types=1);

class Triangulo extends Shape{
    
    public function calcularArea(): int{
        return ($this->altura * $this->ancho) / 2;
    }
}
?>
