<?php

namespace Kata;

use Kata\ScoringRules\ChanceRule;
use Kata\ScoringRules\FivesRule;
use Kata\ScoringRules\FourOfAKindRule;
use Kata\ScoringRules\FoursRule;
use Kata\ScoringRules\OnesRule;
use Kata\ScoringRules\PairRule;
use Kata\ScoringRules\SixesRule;
use Kata\ScoringRules\SmallStraightRule;
use Kata\ScoringRules\ThreeOfAKindRule;
use Kata\ScoringRules\ThreesRule;
use Kata\ScoringRules\TwoPairRule;
use Kata\ScoringRules\TwosRule;
use Kata\ScoringRules\YahtzeeRule;

class Yahtzee {

    public function score($dice) {
        $rules = [new ChanceRule(), new YahtzeeRule(), new OnesRule(), new TwosRule(), new ThreesRule(), new FoursRule(),
                  new FivesRule(), new SixesRule(), new PairRule(), new TwoPairRule(), new ThreeOfAKindRule(),
                  new FourOfAKindRule(), new SmallStraightRule()];
        $score = [];
        foreach ($rules as $rule) {
            $score[$rule->getName()] = $rule->score($dice);
        }

        return $score;
    }
} 