<?php
/**
 * Access Layer
 */

/**
 * Includes
 */
require './DBAL.php';

/**
     * Generates Insert Query
     * @param string $tableName Name of the Table to insert Value to
     * @param string_array $cell_values Values of the all the cells, send empty empty value but send all
     */
    function insertQuery($tableName, $cell_values) {
        $count=count($cell_values);
        $string="insert into $tableName values (";
        for ($i=0;$i<$count;$i++) {
            $string= $string. "?,";
        }
        $string=rtrim($string,",");
        $string=$string." )";
        echo $string."<br>";
        print_r($cell_values);
        $pdo=  Dbal::getConnection("mysql", "localhost", "test", "testUser", "testpass");
        $stmt=$pdo->prepare($string);
        $stmt->execute($cell_values);
    }
    
$tabelName="userinfo";
$values[0]="";
$values[1]="DBAL";
$values[2]="Inserted Via PDO AL ";
insertQuery($tabelName, $cell_values);