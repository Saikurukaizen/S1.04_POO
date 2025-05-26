<?php
declare(strict_types=1);

require_once './PokerDice.php';

$dice = [];
for ($i = 0; $i < 5; $i++) {
    $dice[] = new PokerDice();
}

foreach($dice as $index => $tiroDado){
    $tiroDado->throw();
    echo '<h2>El dado '.($index + 1).' ha sacado: '.$tiroDado->shapeName().'</h2>' . PHP_EOL;
}

echo '<h1>El total de tiradas ha sido de '. PokerDice::getTotalCount().'</h1>' . PHP_EOL;
?>