<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Parent Class
 */
class Shape
{
    private $sides;
    /**
     * Gets Number Sides of Shape
     */
    public function getSides()
    {
        echo "Parent Says: $this->sides \n";
        return $this->sides;
    }
    /**
     * Sets Sides of Shape
     */
    public function setSides($_sides)
    {
        $this->sides=$_sides;
    }
}
    
/**
 * Child Class1
 */
class Square extends Shape
{
    /**
     * Print the Size of sides of Square
     * @return int Return Number of Sides of Shape
     */
    public function printout()
    {
        echo "In Child1: \n";
        echo "4 meter each\n";
        return $this->getSides();
    }
}

/**
 * Child Class2
 */
class Triangle extends Shape
{
    /**
     * Print the Size of sides of Triangle
     * @return int Return Number of Sides of Shape
     */
    public function printer()
    {
        echo "In Child2: \n";
        echo "4 3 2 meter\n";
        return $this->getSides();
    }
}

?>