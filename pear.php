<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
 * Description of apple
 * Just a class apple with name=temptas and Namespace=fruit2
 * @author Troate
 */
namespace fruit2;
class apple {
    //put your code here
    private $name="temptas";
    public function setName($_name)
    {
        pear::$name=$_name;
    }
    public function getName()
    {
        return "temptas";
    }
}
