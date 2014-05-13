<?php

namespace Kata\ScoringRules;


class SixesRuleTest extends NumbersRuleTest{

    function getRule() {
        return new SixesRule();
    }

    function getScoreName() {
        return "sixes";
    }

    function getScoreValue() {
        return 6;
    }
}
