<?php


namespace Kata;


class Yahtzee {

    public function getPossibleScores($dice){
        $chance_score = array_sum($dice);
        $yahtzee = count(array_unique($dice)) == 1;
        $yahtzee_score = $yahtzee ? 50 : 0;

        $possible_scores = array(
            'chance'  => $chance_score,
            'yahtzee' => $yahtzee_score
        );

        return $possible_scores;
    }

} 