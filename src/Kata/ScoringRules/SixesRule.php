<?php


namespace Kata\ScoringRules;


class SixesRule extends NumbersRule{

    function getValue() {
        return 6;
    }

    public function getName() {
        return "sixes";
    }
}