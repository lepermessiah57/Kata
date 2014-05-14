<?php


namespace Kata\ScoringRules;


class LargeStraightRule implements ScoringRule{

    public function score($dice) {
        sort($dice);
        $expected = range(2,6);

        return $expected == $dice ? 20 : 0;
    }

    public function getName() {
        return "large-straight";
    }
}