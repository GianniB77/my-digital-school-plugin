<?php

namespace Vscode\Php;

class TemperatureConverter {
    public function convert($temperature, $unit) {
        if ($unit == 'c') {
            return ($temperature * 9/5) + 32;
        } elseif ($unit == 'f') {
            return ($temperature - 32) * 5/9;
        } else {
            throw new \InvalidArgumentException('Invalid unit provided');
        }
    }
}

// Path: src/TemperatureConverterTest.php