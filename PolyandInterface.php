<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Button
{
    public function pressButton();
}

class PushButton implements Button
{
    public function pressButton()
    {
        echo "Pushed\n";
        return "Pushed";
    }
}

class PullDown implements Button
{
    public function pressButton() {
        echo "Pulled\n";
        return "Pulled";
    }
}