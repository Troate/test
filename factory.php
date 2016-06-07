<?php

/** 
 * Factory Design Pattern
 */

class Factory
{
    /**
     * Produces the Object, this function is the Factory function
     * @param string $class Name of Class needed to be produced
     * @return \class Object of Class whose name was given in Parameter
     */
    public function produce($class)
    {
        $obj=new $class();
        return $obj;
    }
    
}

/**
 * This is the Customer class of Factory Method
 */
class Customer
{
    /**
     *
     * @var string Name of Customer
     */
    private $name;
    /**
     * Constructor of Customer, it sets name equals to name of Class
     */
    function __construct() {
        $this->name="Customer";
    }
    /**
     * Getter function of Private member $name
     * @return string Value of Private member $name
     */
    function getName() {
        return $this->name;
    }
}
