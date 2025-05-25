<?php
declare(strict_types=1);

//EJ.1

class PokerDice{
    private array $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private string $lastRoll = '';
    private int $totalThrows = 0;
    private static int $totalCount = 0;
    
    public function throw(): string{
        $roll = array_rand($this->faces);
        $this->lastRoll = $this->faces[$roll];
        $this->totalThrows++;
        self::$totalCount++;
        return $this->lastRoll;
    }

    public function shapeName(): string{
        return $this->lastRoll;
    }

    public function getTotalThrows(): int{
        return $this->totalThrows;
    }

    public static function getTotalCount(): int{
        return self::$totalCount;
    }
}

$dice = [];
for ($i = 0; $i < 5; $i++) {
    $dice[] = new PokerDice();
}

foreach($dice as $index => $tiroDado){
    $tiroDado->throw();
    echo '<h2>El dado '.($index + 1).' ha sacado: '.$tiroDado->shapeName().'</h2>';
}

echo '<h1>El total de tiradas ha sido de '. PokerDice::getTotalCount().'</h1>'
?>