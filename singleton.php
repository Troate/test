<?php

/**
 * Singleton class only gives single instance, and does not allow to return multiple operators.
 */
class Singleton
{
    /**
     * @var Object It is static, that means its scope is throughout the entire scope
     */
    private static $instance=null;
    /**
     * It has no Definition, and its private so no one can call it.
     */
    private function __construct() {
    }
    /**
     * It gives the instance of object
     * @return object If object is initialized then returns 'old' otherwise it returns 'new', this 'new' and 'old' are for the sake of testing
     */
    static function getInstance()
    {
        if(self::$instance==null){
            self::$instance=new Singleton();
            return "new";
        }else{
            return "old";
        }
        
    }

}
