<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Class\FlyWithWings;
use Duck\MallardDuck;
use Duck\ModelDuck;
use Duck\RubberDuck;
use Duck\SimpleDuck;
use Parrot\RepeatParrot;

$simpleDuck = new SimpleDuck();
$simpleDuck->fly(); // Out: simple fly
$simpleDuck->quack(); // Out: simple quack

$mallard = new MallardDuck();
$mallard->display(); //Mallard Duck
$mallard->performFly(); // Outputs: I'm flying with wings!
$mallard->performQuack(); // Outputs: Quack!

$rubberDuck = new RubberDuck();
$rubberDuck->display(); //Rubber Duck
$rubberDuck->performFly(); // Outputs: I can't fly.
$rubberDuck->performQuack(); // Outputs: Squeak!

// Can you think of a class that might want to use the Quack behavior that isn’t a duck?
$parrot = new RepeatParrot();
$parrot->performRepeat("test");

// Take a moment and think about how you would implement a duck so that its behavior
// could change at runtime. (You’ll see the code that does this a few pages from now.)
// $customBehaviourDuck = new CustomDuck(Behaviour $behaviour);
$modelDuck = new ModelDuck();
$modelDuck->performFly(); //I can't fly
$modelDuck->setFlyBehavior(new FlyWithWings()); 
$modelDuck->performFly(); //I'm flying with wings
