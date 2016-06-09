<?php

/**
 * It contains the Concepts of Polymorphism and Interface
 */

/**
 * Button is Interface Class and contains n e function pressButton()
 */
interface Button
{
    /**
     * It is the non-defined function in interface Button
     */
    public function pressButton();
}


/**
 * It implements the interface Button and defines funtion pressButton()
 */
class concreteButton implements Button
{
    /**
     * Prints Concrete Button Do Nothing
     */
    public function pressButton() {
        echo "Concrete Button Do Nothing\n";
    }
}

/**
 * Child class of concreteButton, has its own definition of pressButton()
 */
class PushButton extends concreteButton
{
    /**
     * It is the definition of pressButton() from concreteButton and interface Button
     * @return string Returns Pushed
     */
    public function pressButton()
    {
        echo "Pushed\n";
        return "Pushed";
    }
}

/**
 * Child class of concreteButton, has its own definition of pressButton()
 */
class PullDown extends concreteButton
{
    /**
     * It is the definition of pressButton() from concreteButton and interface Button
     * @return string Returns Pulled
     */
    public function pressButton() {
        echo "Pulled\n";
        return "Pulled";
    }
}