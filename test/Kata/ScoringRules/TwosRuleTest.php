<?php

namespace Kata\ScoringRules;


class TwosRuleTest extends NumbersRuleTest{

    function getRule() {
        return new TwosRule();
    }

    function getScoreName() {
        return "twos";
    }

    function getScoreValue() {
        return 2;
    }
}
 