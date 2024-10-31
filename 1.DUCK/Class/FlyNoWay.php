<?php

namespace Class;

use Interface\Fly;

class FlyNoWay implements Fly {
    public function fly() {
        echo "I can't fly.\n";
    }
}