<?php


namespace Kata;


class FizzBuzz {

    public function pop( $value ) {
        $this->validatePopInput($value);

        $response = $this->printFizz($value);
        $response .= $this->printBuzz($value);
        $response = $this->printValue($value, $response);

        return $response;
    }

    public function popAllBetween( $start, $end ) {
        $values = [];

        for($i = $start; $i <= $end; $i++) {
            $values[] = $this->pop($i);
        }

        return $values;
    }

    private function isFizz($value) {
        return $value % 3 == 0;
    }

    private function isBuzz($value) {
        return $value % 5 == 0;
    }

    private function printFizz($value) {
        if ($this->isFizz($value)) {
            $response = "FIZZ";
            return $response;
        }
    }

    private function printBuzz($value) {
        if ($this->isBuzz($value)) {
            $response = "BUZZ";
            return $response;
        }
    }

    private function printValue($value, $response) {
        if ($response == "") {
            $response = $value;
            return $response;
        }
        return $response;
    }

    private function validatePopInput($value) {
        if (!is_numeric($value)) {
            throw new \Exception('Value must be an integer');
        }

        if ($value <= 0) {
            throw new \Exception('Value must be a positive integer');
        }
    }

} 