<?php

namespace Kata;

class ChangeMachine {

    public function makeChange($cash){
        $this->throwExceptionIfInvalidInput($cash);

        $value = $cash * 100;
        $change =[];
        $coins = ['half-dollar'=>50, 'quarter'=>25, 'dime'=>10, 'nickel'=>5, 'penny'=>1];

        foreach($coins as $coin=>$coinValue){
            if($value >= $coinValue){
                $amount = (int)($value / $coinValue);
                $change[$coin] = $amount;
                $value = $value - $coinValue * $amount;
            }
        }

        return $change;
    }

    private function throwExceptionIfInvalidInput($cash) {
        if (!($cash > 0)) {
            throw new \Exception("The input must be a positive double");
        }
    }

} 