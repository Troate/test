<?php

/**
 * Object Relational Mapping
 */

/**
 * Databse Class of ORM
 */
class Database
{
    /**
     * @var PHPPlatform Private Static, so no one can access it, and its available through out the project once initialized
     */
    private static $connection=null;
    /**
     * Connects to Database, if connection already doesnot exist otherwise returns same connection and also connects to database
     * @return PHPPlatform Resource
     */
    public static function connectToDB() {
        if(self::$connection==null){
            self::$connection=@mysql_connect("localhost", "testUser", "testpass")or die(mysql_error());
            mysql_select_db("test")or die(mysql_error());
        }
        return self::$connection;
    }
    /**
     * Runs the Query given to it
     * @param string $query It is a string query to run on Database
     * @return Resource It contains the result of the query
     */
    public function runQuery($query) {
        Database::connectToDB();
        $res=mysql_query($query)or die(mysql_error());
        return $res;
    }
    
    /**
     * Generates Insert Query
     * @param string $tableName Name of the Table to insert Value to
     * @param string_array $cell_values Values of the cells
     */
    public function insertQuery($tableName, $cell_values) {
        $string="insert into $tableName values (";
        foreach ($cell_values as $value) {
            echo "$value <br>";
            $string= $string. "'$value',";
        }
        $string=  rtrim($string,",");
        $string=$string." )";
        echo $string;
        Database::runQuery($string);
    }
}

/**
 * Model Class of ORM
 */
class Model
{
    /**
     * @var string It corresponds to UserId in userinfo
     */
    private $id;
    /**
     * @var string It corresponds to Name in userinfo
     */
    private $name;
    /**
     * @var string It corresponds to Information in userinfo
     */
    private $info;
    /**
     * Getter of private member $id
     * @return string
     */
    function getId() {
        return $this->id;
    }
    /**
     * Getter of private member $name
     * @return string
     */
    function getName() {
        return $this->name;
    }
    /**
     * Getter of private member $info
     * @return string
     */
    function getInfo() {
        return $this->info;
    }
    /**
     * Setter of private member $id
     * @param string $id It is the id of the Model
     */
    function setId($id) {
        $this->id = $id;
    }
    /**
     * Setter of private member $name
     * @param string $name It is the name of the Model
     */
    function setName($name) {
        $this->name = $name;
    }
    /**
     * Setter of private member $info
     * @param string $info It is the info of the Model
     */
    function setInfo($info) {
        $this->info = $info;
    }
    /**
     * Inserts Model Object, it creates Model Object, sets its id, name and info, calls function of Database to populate Database
     */
    public function insertModel()
    {
        try{
        $m=new Model;
        $m->setName("Model");
        $m->setInfo("Inserted from ORM Model Class via self Generated Query");
        //$name=$m->getName();
        //$info=$m->getInfo();
        //$string="insert into  userinfo (  UserId ,  Name ,  Information ) values ('',  '$name',  '$info')";
        $tabelName="userinfo";
        $values[0]="";
        $values[1]=$m->getName();
        $values[2]=$m->getInfo();
        Database::insertQuery($tabelName,$values);
        //Database::runQuery($string);
        return true;
        }catch (Exception $exc) {
        return false;
    }
    
    }
    /**
     * Calls the function of Database, which gives row result, then make objects of Model and sets their ids, names and infos according to the result of query and then prints it
     * @return \Model
     */
    public function selectModel() {
        try{
        $string="select * from  userinfo ";
        $res=  Database::runQuery($string);
        $models=array();
        echo "UserId\tName\tInfo\n";
        while($row=  mysql_fetch_assoc($res))
        {
            $m=new Model;
            $m->setId($row['UserId']);
            $m->setName($row['Name']);
            $m->setInfo($row['Information']);
            array_push($models, $m);
            echo $m->getId()."\t".$m->getName()."\t".$m->getInfo()."\n";
        }
        return true;
        }catch(Exception $e){
            return false;
        }
        
    }

}