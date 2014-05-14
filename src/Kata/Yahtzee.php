<?php


namespace Kata;


class Yahtzee {

    public function getPossibleScores($dice){
        $chance_score = array_sum($dice);
        $yahtzee = count(array_unique($dice)) == 1;
        $yahtzee_score = $yahtzee ? 50 : 0;
        $possible_dice = [1=>0, 2=>0, 3=>0, 4=>0, 5=>0, 6=>0];
        foreach($dice as $die){
            $possible_dice[$die]++;
        }
        $pair_score = 0;
        foreach($possible_dice as $value => $count){
            if( $count >= 2 ) {
                $pair_score = $value * 2;
            }
        }

        $possible_scores = array(
            'chance'  => $chance_score,
            'yahtzee' => $yahtzee_score,
            'pair'    => $pair_score
        );

        return $possible_scores;
    }

} 