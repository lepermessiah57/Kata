<?php


namespace Kata;


class ChangeMachine {

    public function makeChange($cash) {

        $this->validateCashInput($cash);

        $cents = $cash * 100;
        $change = [];
        $coinTypes = ['half-dollar' => 50, 'quarter' => 25, 'dime' => 10, 'nickel' => 5, 'penny' => 1];

        foreach ($coinTypes as $coin=>$valueInCents) {
            if ( $cents / $valueInCents >= 1 ) {
                $numberCoins = (int)($cents / $valueInCents);
                $change[$coin] = $numberCoins;
                $cents = $cents - ($numberCoins * $valueInCents);
            }
        }

        return $change;

    }

    private function validateCashInput($cash) {
        if (!is_numeric($cash)) {
            throw new \Exception("Input must be numeric");
        }

        if ($cash < 0) {
            throw new \Exception("Input must be positive");
        }
    }

} 