<?php

include '../singleton.php';
include '../factory.php';

/**
 * Test the Design Patterns
 */
class testDP extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider singleDataProv
     * @param Object $obj
     * @param string $result Expected result of Singleton::getInstance()
     * @return Object
     */
    public function testSingleton($obj,$result) {
        $obj=Singleton::getInstance();
        $this->assertEquals($obj,$result);
        return $obj;
    }
    /**
     * DataProvider of testSingleton
     */
    public function singleDataProv() {
        $obj=null;
        return array($obj=array($obj,"new"),
                     $obj=array($obj,"old"));
    }
    
    /**
     * Tests the Factory method
     * @dataProvider testFactoryDP
     * @param string $class Name of Class
     */
    public function testFactory($class) {
        $test=Factory::produce($class);
        $this->assertEquals($test->getName(),$class);
    }
    /**
     * DataProvider of testFactory()
     */
    public function testFactoryDP() {
        return array(array("Customer"));
    }
}

