<?php


namespace Kata\ScoringRules;


class ChanceRule implements ScoringRule{

    public function score($dice) {
        return array_sum($dice);
    }

    public function getName() {
        return "chance";
    }
}