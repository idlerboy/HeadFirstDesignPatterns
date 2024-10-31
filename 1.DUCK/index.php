<?php

require_once 'vendor/autoload.php';

use Duck\MallardDuck;
use Duck\RubberDuck;
use Duck\SimpleDuck;

$simpleDuck = new SimpleDuck();
$simpleDuck->fly();
$simpleDuck->quack();

$mallard = new MallardDuck();
$mallard->display(); //Mallard Duck
$mallard->performFly(); // Outputs: I'm flying with wings!
$mallard->performQuack(); // Outputs: Quack!

$rubberDuck = new RubberDuck();
$rubberDuck->display(); //Rubber Duck
$rubberDuck->performFly(); // Outputs: I can't fly.
$rubberDuck->performQuack(); // Outputs: Squeak!

