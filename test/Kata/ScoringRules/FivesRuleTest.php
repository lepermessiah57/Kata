<?php

namespace Kata\ScoringRules;


class FivesRuleTest extends NumbersRuleTest{

    function getRule() {
        return new FivesRule();
    }

    function getScoreName() {
        return "fives";
    }

    function getScoreValue() {
        return 5;
    }
}
 