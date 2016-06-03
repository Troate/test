<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of apple
 * Just Class apple with name=ootpatang and Namespcae=fruit1
 * @author Troate
 */
namespace fruit1;
class apple {
    //put your code here
    private $name="oootpatang";
    public function setName($_name)
    {
        apple::$name=$_name;
    }
    public function getName()
    {
        return "oootpatang";
    }
}
