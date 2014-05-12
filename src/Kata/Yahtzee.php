<?php

namespace Kata;

class Yahtzee {

    public function score($dice){
        $yahtzee = 0;
        $chance = array_sum($dice);

        if(count(array_unique($dice)) == 1){
            $yahtzee = 50;
        }

        $score = ['yahtzee'=>$yahtzee];
        $score['chance'] = $chance;
        return $score;
    }
} 