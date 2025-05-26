<?php
declare(strict_types=1);

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

?>