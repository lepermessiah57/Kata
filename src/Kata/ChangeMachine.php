<?php

namespace Kata;

class ChangeMachine {

    public function makeChange($money){
        $cash = $money * 100;

        $quarter = $this->countChange($cash, 25);
        $dime = $this->countChange($cash, 10);
        $nickel = $this->countChange($cash, 5);
        $penny = $this->countChange($cash, 1);

        $values = ['penny'=>$penny, 'nickel'=>$nickel, 'dime'=>$dime, 'quarter'=>$quarter];
        $retval = [];
        foreach($values as $key => $value){
            if($value > 0){
                $retval[$key] = $value;
            }
        }

        return $retval;
    }

    private function countChange(&$cash, $value) {
        $change = 0;
        while ($cash - $value >= 0) {
            $change++;
            $cash -= $value;
        }
        return $change;
    }


} 