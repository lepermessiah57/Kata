<?php


namespace Kata;


class FizzBuzz {

    public function printFizzBuzz($number){
        $this->throwExceptionIfInvalidInput($number);

        $value = $this->printFizz($number);
        $value .= $this->printBuzz($number);
        $value .= $this->printNumber($number, $value);

        return $value;
    }

    private function throwExceptionIfInvalidInput($number) {
        if ($number == 0 || is_null($number) || !is_numeric($number)) {
            throw new \Exception('Invalid Input');
        }
    }

    private function printFizz($number) {
        $value = "";
        if ($this->isFizz($number)) {
            $value = "FIZZ";
        }
        return $value;
    }

    private function printBuzz($number) {
        $value = "";
        if ($this->isBuzz($number)) {
            $value = "BUZZ";
        }
        return $value;
    }

    private function printNumber($number) {
        $value = "";

        if (!($this->isFizz($number) || $this->isBuzz($number))) {
            $value = $number;
        }
        return $value;
    }

    private function isFizz($number) {
        return ($number % 3) == 0;
    }

    private function isBuzz($number) {
        return ($number % 5) == 0;
    }
} 