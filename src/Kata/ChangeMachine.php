<?php

namespace Kata;

class ChangeMachine {

    public function makeChange($money){
        $cash = $money * 100;

        list($quarter, $cash) = $this->countChange($cash, 25);
        list($dime, $cash) = $this->countChange($cash, 10);
        list($nickel, $cash) = $this->countChange($cash, 5);
        list($penny, $cash) = $this->countChange($cash, 1);

        $values = ['penny'=>$penny, 'nickel'=>$nickel, 'dime'=>$dime, 'quarter'=>$quarter];
        $retval = [];
        foreach($values as $key => $value){
            if($value > 0){
                $retval[$key] = $value;
            }
        }

        return $retval;
    }

    private function countChange($cash, $value) {
        $change = 0;
        while ($cash - $value >= 0) {
            $change++;
            $cash -= $value;
        }
        return array($change, $cash);
    }


} 