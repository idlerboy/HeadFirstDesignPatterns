<?php

namespace Parrot;

use Class\FlyWithWings;
use Class\Repeat;

class RepeatParrot extends Parrot
{
    public function __construct()
    {
        $this->flyBehavior= new FlyWithWings();
        $this->repeatBehavior = new Repeat();
    }

    public function fly()
    {
        $this->flyBehavior->fly();
    }

    public function performRepeat($repeat = null)
    {
        $this->repeatBehavior->repeat($repeat);
    }
}
