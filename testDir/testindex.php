<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../index.php';
include '../connectDb.php';
include '../filing.php';
include '../serverSocket.php';
include '../testNamespace.php';
include '../abstraction.php';
include '../Inheritance.php';
include '../PolyandInterface.php';
class test extends PHPUnit_Framework_TestCase
{
    /**
     * This File contains test functions for different files
     */
    public function testadd()
    {
        echo "\n---Dummy Test:Test Add---\n";
        $a=2;
        $b=2;
        $c=add($a, $b);
        $this->assertEquals(4,$c);
    }
    
    /**
     * Tests the function con() in connectDb.php
     */
    
    public function testConnectDb() 
    {
        echo "\n---Databse Test---\n";
        $host="localhost";
        $db="test";
        $user="testUser";
        $pass="testpass";
        $this->assertTrue(con($host, $db, $user, $pass));
    }
    
    /**
     * Test the function filing() in filing.php
     */
    
    public function testfiling()
    {
        echo "\n---Filing Test---\n";
        $name="../fileToRead.txt";
        $this->assertTrue(filing($name));
    }
    
    /**
     * This function tests connectSocket() in serverSocket.php
     */
    
//    public function testserverSocket()
//    {
//        $address="127.0.0.1";
//        $port="10000";
//        $this->assertTrue(connectSocket($address, $port));
//    }
    
    /**
     * This function tests Namespace stuff
     */
    
    public function testTestNamespace()
    {
        echo "\n---Namespace Test---\n";
        $check1="oootpatang";
        $check2="temptas";
        $this->assertTrue(testnamespace($check1,$check2));
    }
    
    
    /**
     * Tests the abstraction concept from abstraction.php
     */
    public function testAbstraction()
    {
        echo "\n---Abstraction Test---\n";
        $cc1=new Concrete1;
        $cc2=new Concrete2;
        $this->assertEquals($cc1->printout(),"ConcreteClass1");
        $this->assertEquals($cc2->printout(),"ConcreteClass2");
    }
    
    /**
     * Test Inheritance concept from Igeritance.php
     */
    public function testInheritance()
    {
        echo "\n---Inheritance Test---\n";
        $shape1=new Shape();
        $shape2=new Square();
        $shape3=new Triangle();
        $shape1->setSides(5);
        $this->assertEquals($shape1->getSides(),5);
        $shape2->setSides(4);
        $this->assertEquals($shape2->printout(),4);
        $shape3->setSides(3);
        $this->assertEquals($shape3->printer(),3);
    }
    
    /**
     * Tests Polymorphism concept from PolyandInterface.php
     */
    public function testPoly()
    {
        echo "\n---Polymorphism Test---\n";
        $push=new PushButton;
        $pull=new PullDown;
        $b=array($push,$pull);
        $this->assertEquals($b[0]->pressButton(),"Pushed");
        $this->assertEquals($b[1]->pressButton(),"Pulled");
    }
}

?>