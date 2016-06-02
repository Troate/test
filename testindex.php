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


class test extends PHPUnit_Framework_TestCase
{
    /**
     * This File contains test functions for different files
     */
    public function testadd()
    {
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
        $name="fileToRead.txt";
        $this->assertTrue(filing($name));
    }
    
    /**
     * THis function tests connectSocket() in serverSocket.php
     */
    
    public function testserverSocket()
    {
        $address="127.0.0.1";
        $port="10000";
        $this->assertTrue(connectSocket($address, $port));
    }
    
}

?>