<?php


namespace Kata;


class ChangeMachine {

    public function cash($check){

        $value = $check * 100;
        $arr = array('half-dollar'=>50,'quarter'=>25,'dime'=>10,'nickel'=>5,'penny'=>1);
        $change = [];
        foreach($arr as $ky=>$vl){
            $c = $this->makeChange($value, $vl);
            if($c>0) $change[$ky] = $c;
        }

        return $change;


    }

    private function makeChange(&$value, $coinValue) {
        $c = 0;
        while ($value >= $coinValue) {
            $c++;
            $value = $value - $coinValue;
        }
        return $c;
    }


}