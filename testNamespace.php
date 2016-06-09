<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Using Two classes with same name but different values inside, and they have different Namespaces.
 */
namespace rock;
include './index.php';
require ROOTPATH.'/apple.php';
require 'mango.php';
use fruit1\apple as fruit1;
use fruit2\apple as fruit2;

/**
 * This Function checks the output of the two classes with different name but different namespaces
 * @return boolean Return true if it gets the right values
 */

function testnamespace($check1, $check2) {
    if (fruit1::getName() == $check1 && fruit2::getName() == $check2) {
        return true;
    } else {
        return false;
    }
}

?>