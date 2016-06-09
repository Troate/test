<?php
/**
 * Contains the Code for the concept of Abstraction
 */

/**
 * This is an abstract class
 */
abstract class AbstractClass
{
    /**
     * An abstract function
     */
    abstract protected function value();
    
    /**
     * Returns, to the testunit, the value of the ConcreteClass as defined by the Concrete Classes
     */
    public function printout()
    {
        return $this->value();
    }
}


/**
 * Concrete1 is concrete class which extends Abstract class
 */
class Concrete1 extends AbstractClass
{
    /**
     * Returns 'ConreteClass1' for sake of testing, it is the definition of abstract function value() in AbstractClass
     */
    public function value()
    {
        return "ConcreteClass1";
    }
}

/**
 * Concrete2 is concrete class which extends Abstract class
 */
class Concrete2 extends AbstractClass
{
    /**
     * Returns 'ConreteClass2' for sake of testing, it is the definition of abstract function value() in AbstractClass
     */
    public function value()
    {
        return "ConcreteClass2";
    }
}