<?php


namespace Kata\ScoringRules;


class FourOfAKindRule extends PairRule{

    public function getCount(){
        return 4;
    }

    public function getName(){
        return "four-of-a-kind";
    }

} 