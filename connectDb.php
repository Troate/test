<?php
/**
 * Connects to Database, and run queries
 */

    /**
     * Connects to the Database. It takes (hostname, database, username, password) to connect to the database and returns true if database is connected.
     * @param string $host Name of Server
     * @param string $db Name of Database
     * @param string $user Name of User to connect to Server 
     * @param string $pass Password of User to connect to Server
     * @return boolean Return true if connected else false
     */
    function con($host, $db, $user, $pass)
    {
        if(!@mysql_connect($host, $user, $pass)||!@mysql_select_db($db)){
            die('Could Not Connect to Database!');
            return false;
        }else{
            return TRUE;
        }
    }
    
    /**
     * Runs the Query given to it
     * @param string $query It is a string query to run on Database
     * @return Resource It contains the result of the query
     */
    function runQuery($query)
    {
        con();
        $res=mysql_query($query)or die(mysql_error());
        return $res;
    }

?>