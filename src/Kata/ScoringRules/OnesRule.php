<?php


namespace Kata\ScoringRules;


class OnesRule extends NumbersRule{

    public function getName() {
        return "ones";
    }

    function getValue() {
        return 1;
    }
}