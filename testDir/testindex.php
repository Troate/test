<?php
/**
 * It is the Test file for Connecting DB, Filing, Namespace, Inheritance and Polymorphism and Server Side code of Socket
 */

/**
 * It is the Test file for Connecting DB, Filing, Namespace, Inheritance and Polymorphism and Server Side code of Socket
 */
include '../index.php';
require ROOTPATH.'/connectDb.php';
include $GLOBALS['Root'].'/filing.php';
include '../serverSocket.php';
include '../testNamespace.php';
include '../abstraction.php';
include '../Inheritance.php';
include '../PolyandInterface.php';
use rock;

/**
 * Contains Functions for testing different Functionalities like Connecting DB, Filing, Namespace, Inheritance and Polymorphism and Server Side code of Socket
 */
class test extends PHPUnit_Framework_TestCase
{
    /**
     * This is dummy Function
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
     * Tests Connection to Database
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
     * @param string $name Name of File to do Filing
     * @dataProvider testfilingDP
     */
    public function testfiling($name)
    {
        echo "\n---Filing Test---\n";
        $this->assertTrue(filing($name));
    }
    /**
     * DataProvider of testfiling()
     */
    public function testfilingDP() {
        return array(array("../fileToRead.txt"));
    }
    
    /**
     * This function tests connectSocket() in serverSocket.php
     * @param string $address Address to connect to server
     * @param string $port Port to connect to server
     * @dataProvider testserverSocketDP
     */
//    public function testserverSocket($address,$port)
//    {
//        $this->assertTrue(connectSocket($address, $port));
//    }
    /**
     * DataProvider of testserverSocket()
     */
//    public function testserverSocketDP() {
//        return array(array("127.0.0.1","10000"));
//    }
    
    /**
     * Tests the concept of Namespace from the testnamespace.php
     * @dataProvider testNamespaceDP
     * This function tests Namespace stuff
     */
    public function testTestNamespace($check1,$check2)
    {
        echo "\n---Namespace Test---\n";
        $this->assertTrue(rock\testnamespace($check1,$check2));
    }
    /**
     * DataProvider of testTestNamespace
     */
    public function testNamespaceDP() {
        return array(array("oootpatang","temptas"));
    }
    
    
    /**
     * Tests the cincept of Abstraction from abstraction.php
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
     * Tests the concept of Inheritance from Inheritance.php
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
     * Tests the Polymorphism Concept from PolyandInterface.php
     * @param string $class Class which needs to be initialized
     * @param string $result Expected Result of function $class::pressButton()
     * @dataProvider testPolyDP
     * Tests Polymorphism concept from PolyandInterface.php
     */
    public function testPoly($class,$result)
    {
        echo "\n---Polymorphism Test---\n";
        $obj=new $class;
        $b[]=new concreteButton;
        $b= array();
        array_push($b, $obj);
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