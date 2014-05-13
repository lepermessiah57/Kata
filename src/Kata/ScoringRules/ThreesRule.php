<?php


namespace Kata\ScoringRules;


class ThreesRule extends NumbersRule{

    function getValue() {
        return 3;
    }

    public function getName() {
        return "threes";
    }
}