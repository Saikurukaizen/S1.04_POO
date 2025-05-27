<?php
declare(strict_types=1);

class PokerDice{
    private static array $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private string $lastRoll = '';
    private int $totalThrows = 0;
    private static int $totalCount = 0;
    
    public function throw(): void{
        $roll = array_rand(self::$faces);
        $this->lastRoll = self::$faces[$roll];
        $this->totalThrows++;
        self::$totalCount++;
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