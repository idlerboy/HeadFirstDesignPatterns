<?php

namespace Class;

use Interface\Fly;

class FlyWithWings implements Fly {
    public function fly() {
        echo "I'm flying with wings!\n";
    }
}