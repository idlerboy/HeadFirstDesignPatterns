<?php

namespace Class;

use Interface\Quack;

class MuteQuack implements Quack{
    public function quack(){
        echo "<silence>";
    }
}