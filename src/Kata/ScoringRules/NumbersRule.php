<?php


namespace Kata\ScoringRules;


abstract class NumbersRule implements ScoringRule{

    abstract function getValue();

    public function score($dice) {
        $values = array_count_values($dice);
        return array_key_exists($this->getValue(), $values) ? $values[$this->getValue()] * $this->getValue() : 0;
    }

} 