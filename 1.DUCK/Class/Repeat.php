<?php
namespace Class;

use Interface\Quack;
use Interface\RepeatInterface;

class Repeat implements RepeatInterface
{
    public function repeat($text = null) {
        echo "Repeated text: " . $text . "\n";
    }
}