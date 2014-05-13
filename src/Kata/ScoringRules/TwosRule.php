<?php


namespace Kata\ScoringRules;


class TwosRule implements ScoringRule{

    public function score($dice) {
        $values = array_count_values($dice);
        return array_key_exists('2', $values) ? $values[2] * 2 : 0;
    }

    public function getName() {
        return "twos";
    }
}