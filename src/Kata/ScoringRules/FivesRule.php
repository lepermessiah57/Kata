<?php


namespace Kata\ScoringRules;


class FivesRule extends NumbersRule{

    function getValue() {
        return 5;
    }

    public function getName() {
        return "fives";
    }
}