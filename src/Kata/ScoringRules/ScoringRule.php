<?php

namespace Kata\ScoringRules;


interface ScoringRule {

    public function score($dice);

    public function getName();
} 