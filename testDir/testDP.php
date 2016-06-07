<?php

include '../singleton.php';

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
    public function singleDataProv() {
        $obj=null;
        return array($obj=array($obj,"new"),
                     $obj=array($obj,"old"));
    }
}

