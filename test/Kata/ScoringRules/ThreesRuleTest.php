<?php

namespace Kata\ScoringRules;


class ThreesRuleTest extends NumbersRuleTest{

    function getRule() {
        return new ThreesRule();
    }

    function getScoreName() {
        return "threes";
    }

    function getScoreValue() {
        return 3;
    }
}
 