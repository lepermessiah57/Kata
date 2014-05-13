<?php


namespace Kata\ScoringRules;


class TwosRule extends NumbersRule{

    public function getName() {
        return "twos";
    }

    function getValue() {
        return 2;
    }
}