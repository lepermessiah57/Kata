<?php

namespace Kata\ScoringRules;


class FoursRuleTest extends NumbersRuleTest{

    function getRule() {
        return new FoursRule();
    }

    function getScoreName() {
        return "fours";
    }

    function getScoreValue() {
        return 4;
    }
}
 