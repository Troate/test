<?php 
/**
 * Just a class apple with name=temptas and Namespace=fruit2
 */
namespace fruit2;
/**
 * Class apple, with namespace fruit1 and private member $name
 */
class apple {
    /**
     * @var string name of object apple
     */
    private $name="temptas";
    /**
     * Setter of private member $name
     * @param string $_name To overwrite the default name of apple
     */
    public function setName($_name)
    {
        pear::$name=$_name;
    }
    /**
     * Getter of Private member $name
     * @return string Value of $name of apple
     */
    public function getName()
    {
        return "temptas";
    }
}
