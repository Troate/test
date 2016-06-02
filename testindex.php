<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'index.php';
require_once 'connectDb.php';

class test extends PHPUnit_Framework_TestCase
{
    /**
     * This is Unit Testing
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
}

?>