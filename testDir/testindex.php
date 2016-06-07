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
     * @param string $host Servername
     * @param string $db Database name
     * @param string $user Username to connect to Database
     * @param string $pass Password to connect to Database
     * @dataProvider testConnectDbDP
     * Tests the function con() in connectDb.php
     */
    
    public function testConnectDb($host,$db,$user,$pass) 
    {
        echo "\n---Databse Test---\n";
        $this->assertTrue(con($host, $db, $user, $pass));
    }
    /**
     * DataProvider of testConnectDb()
     */
    function testConnectDbDP() {
        return array(array("localhost","test","testUser","testpass"));
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
    
//    public function testTestNamespace()
//    {
//        echo "\n---Namespace Test---\n";
//        $check1="oootpatang";
//        $check2="temptas";
//        $this->assertTrue(testnamespace($check1,$check2));
//    }
    
    
    /**
     * @param string $class Class which needs to be initialized
     * @param string $result Expected Result of function $class::printout()
     * @dataProvider testAbstractionDP
     * Tests the abstraction concept from abstraction.php
     */
    public function testAbstraction($class,$result)
    {
        echo "\n---Abstraction Test---\n";
        $cc1=new $class;
        $this->assertEquals($cc1->printout(),$result);
    }
    /**
     * DataProvider of testAbstraction()
     */
    public function testAbstractionDP() {
        return array(array("Concrete1","ConcreteClass1"),
                     array("Concrete2","ConcreteClass2"));
    }
    
    /**
     * @param string $class Class which needs to be initialized
     * @param string $side Number of Sides of the Shape
     * @param string $result Expected Result of function $class::getSides()
     * @dataProvider testInheritanceDP
     * Test Inheritance concept from Igeritance.php
     */
    public function testInheritance($class,$side,$result)
    {
        echo "\n---Inheritance Test---\n";
        $shape1=new $class;
        $shape1->setSides($side);
        $this->assertEquals($shape1->getSides(),$result);
    }
    /**
     * DataProvider of testInheritance()
     */
    public function testInheritanceDP() {
        return array(array("Shape","5","5"),
                     array("Square","4","4"),
                     array("Triangle","3","3"));
    }
    
    /**
     * @param string $class Class which needs to be initialized
     * @param string $result Expected Result of function $class::pressButton()
     * @dataProvider testPolyDP
     * Tests Polymorphism concept from PolyandInterface.php
     */
    public function testPoly($class,$result)
    {
        echo "\n---Polymorphism Test---\n";
        $obj=new $class;
        $b=array($obj);
        $this->assertEquals($b[0]->pressButton(),$result);
    }
    /**
     * DataProvider of testPoly()
     */
    public function testPolyDP() {
        return array(array("PushButton","Pushed"),
                     array("PullDown","Pulled"));
    }
}

?>