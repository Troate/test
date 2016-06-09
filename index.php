<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         *Defines ROOTPATH and Global Variable of Absolute Path
         */
        
        $GLOBALS['Root']='C:\xampp\htdocs\testphp';
        define('ROOTPATH', 'C:\xampp\htdocs\testphp');
        // put your code here
        /**
         * A Comment
         */
        
        /**
         * 
         * Adds two integers
         * Change1
         * Change2
         * Change3
         * 
         * @param int $a
         * @param int $b
         * @return int
         */
        function add($a, $b){
            return $a+$b;
        }
        
        
        ?>
    </body>
</html>
