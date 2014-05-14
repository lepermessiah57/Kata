<?php


namespace Kata\ScoringRules;


class SmallStraightRule implements ScoringRule {

    public function score($dice) {
        sort($dice);
        $expected = range(1,5);

        return $dice == $expected ? 15 : 0;
    }

    public function getName() {
        return "small-straight";
    }
}