<?php
declare(strict_types=1);

class Employee{

    private string $nombre;
    private int $sou;

    public function __construct(string $nombre, int $sou){
        $this->nombre = $nombre;
        $this->sou = $sou;
    }

    public function print(): void{
        if($this->sou < 6000){
            echo '<h2>El empleado '.$this->nombre.' no ha de pagar impuestos</h2>' . PHP_EOL;
        }
        else{
            echo '<h2>El empleado '.$this->nombre.' ha de pagar impuestos</h2>' . PHP_EOL;
        }
    }
}

$empleado1 = new Employee('José', 5000);
$empleado1->print();

?>
