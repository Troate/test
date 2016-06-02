<?php


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
            die('Could Not Connect!');
            return false;
        }else{
            return TRUE;
        }
    }


?>