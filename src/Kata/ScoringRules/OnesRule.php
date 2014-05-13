<?php


namespace Kata\ScoringRules;


class OnesRule implements ScoringRule{

    public function score($dice) {
        $values = array_count_values($dice);
        return array_key_exists('1', $values) ? $values[1] : 0;
    }

    public function getName() {
        return "ones";
    }
}