<?php


namespace Kata;


use Kata\ScoringRules\ChanceRule;
use Kata\ScoringRules\YahtzeeRule;

class Yahtzee {

    public function getPossibleScores($dice){
        $chance = new ChanceRule();
        $chance_score = $chance->score($dice);

        $yahtzee = new YahtzeeRule();
        $yahtzee_score = $yahtzee->score($dice);


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
            $chance->getScoreName()  => $chance_score,
            $yahtzee->getScoreName() => $yahtzee_score,
            'pair'    => $pair_score
        );

        return $possible_scores;
    }

} 