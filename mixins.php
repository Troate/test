<?php

/**
 * Contains code related to Mxins Concepts via use of Traits
 */

/**
 * trait SayWorld
 */
trait SayWorld {
    /**
     * 'Prints World'
     */
    public function sayHello() {
        echo 'World!';
    }
    /**
     * Prints 'Traint Function Called'
     */
    public function traitFunction() {
        echo 'Trait Function Called';
    }
}

/**
 * Parrent Class
 */
class Base {
    /**
     * Prints 'Hello'
     */
    public function sayHello() {
        echo 'Hello ';
    }
    /**
     * Prints 'Parent Function Called'
     */
    public function parentFunction() {
        echo 'Parent Function Called';
    }
}

/**
 * Child Class of Class Base, it uses Trait SayWorld
 */
class MyHelloWorld extends Base {
    use SayWorld;
    /**
     * Prints 'Hello' and Call the function sayHello of trait SayWorld
     */
    public function sayHello() {
        echo 'Hello ';
        SayWorld::sayHello();
    }
}

$o = new MyHelloWorld();
$o->sayHello();