<?php
/**
 * Contains Different Codes for the Concept of Datatypes, Arrays and Global Variables
 */

// A simple Block of code which gets the type of $string
$string="a";
echo "A Simple String<br>";
echo "$string Datatype: ".gettype($string)."<br>";

// A code block which typecasts string into int and gets its type
$tcstring=(int)$string;
echo "A Simple String TypeCasted to Int<br>";
echo "$tcstring Datatype: ".gettype($tcstring)."<br>";

// A code block which adds integers and concatenate it with string and gets its type
$a=(16+5).$string;
echo "adding 16+5 and Concatenating with a string<br>";
echo "$a Datatype: ".gettype($a)."<br>";

// A code block which adds integers and concatenate it with string, and type cast whole into int
$tca=(int)((16+5).$string);
echo "adding 16+5, Type Casting into String and Concatenating with a string<br>";
echo "$tca Datatype: ".gettype($tca)."<br>";

// A code block which concatenates string with addition of two integers and gets its type
$b=$string.(16+5);
echo "Concatenating the string with addition of 16+5<br>";
echo "$b Datatype: ".gettype($b)."<br>";

// A code block which has two variables $var and $tcb
$var=$string.(16+5); // concatenates string with addition of two integers
$tcb=(int)($string.(16+5)); // concatenates string with addition of two integers and typecast whole into int
settype($var, "integer"); // sets type of $var into int
echo "Concatenating the string with addition of 16+5, and type casting whole<br>";
echo "$tcb Datatype: ".gettype($tcb)."<br>"; // getting type of $tcb
echo "$var Datatype: ".gettype($var)."<br>"; // getting type of $var
$var=$var."string Concatenation"; // concatenation integer with string
echo $var." Datatype: ".gettype($var)."<br>"; // getting type of $var
// This if statement checks if $var is string and outputs error line
if (gettype($var) == "string") {
    echo " $ var is not allowed as String";
}

/**
 * Defines the values of $colorList
 */
function scopeofArray(){
    $colorList[] = "red"; 
    $colorList[] = "green"; 
    $colorList[] = "blue"; 
    $colorList[] = "black"; 
    $colorList[] = "white";
    print_Array($colorList);
}

/**
 * Prints the Value of $colorlist
 * @param string_array $colorList Array of string
 */
function print_Array($colorList){
    $rang=$colorList;
    $GLOBALS["rang"]=$rang; // setting into Global Variable
    echo '<br>';
    foreach ($colorList as $value) 
    {
        echo $value."<br>";
    }
}
// Call to function scopeofArray() which defines the $colorList and call scopeofArray_() which prints it
scopeofArray();
print_r($GLOBALS["rang"]);
echo "<br>";

// Defining 2D Array
$myLists['colors'] = array("apple"=>"red",
                           "grass"=>"green", 
                           "sky"=>"blue", 
                           "night"=>"black",
                           "wall"=>"white"); 

$myLists['cars'] = array("BMW"=>"M6", 
                         "Mercedes"=>"E 270 CDI", 
                         "Lexus"=>"IS 220d", 
                         "Mazda"=>"6", 
                         "Toyota"=>"Avensis");
// Printing 2D Array
print_r($myLists['colors']);