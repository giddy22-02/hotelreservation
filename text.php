<?php
//declare a variable x
$x="cars are advantageous";
//print out the length of x variable
echo strlen($x)."<br>";
//print out the number of words in the variable x
echo str_word_count($x)."<br>";
//print out the reverse of the words in variable x
echo strrev($x)."<br>";
//print out the position of are in variable x
echo strpos($x,"are")."<br>";
//replace cars with bikes in variable x
echo str_replace('cars', 'bikes',$x);
?>