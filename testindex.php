<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'index.php';
require_once 'connectDb.php';
require_once 'filing.php';
require_once 'serverSocket.php';
require_once 'testNamespace.php';
require_once 'abstraction.php';

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
        $name="fileToRead.txt";
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
    
}

?>