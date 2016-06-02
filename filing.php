<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Write a new line to File and Read the File
 * @param string $name Name of the File to write and reads
 */

function filing($name)
{
    $myfile=fopen($name, 'a') or die ("Unable to Open File to Write");
    if (!$myfile) {
        return false;
    }
    fwrite($myfile,"\nNew Line.");
    fclose($myfile);
    $myfile=fopen($name,'r') or die ("Unable to Open File to Read");
    if (!$myfile) {
        return false;
    }
    $content=fread($myfile, filesize($name));
    echo $content;
    fclose($myfile);
    return true;
}

?>