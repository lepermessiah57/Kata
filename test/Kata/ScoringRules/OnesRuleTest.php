<?php

namespace Kata\ScoringRules;


class OnesRuleTest extends NumbersRuleTest{

    function getRule() {
        return new OnesRule();
    }

    function getScoreName() {
        return "ones";
    }

    function getScoreValue() {
        return 1;
    }
}
 