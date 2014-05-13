<?php


namespace Kata\ScoringRules;


class FoursRule extends NumbersRule{

    function getValue() {
        return 4;
    }

    public function getName() {
        return "fours";
    }
}