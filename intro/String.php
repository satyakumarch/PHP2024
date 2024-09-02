<?php
// $name="satya </br>";
// $greeeting="hello ,$name";
// echo $greeeting;

// //concatenation
// $fullgreeting=$greeeting."how are you: ";
// echo $fullgreeting;


// //string length
// echo strlen($fullgreeting);

// //uppercase and lowercase
// echo strtoupper($fullgreeting);

// echo strtolower($fullgreeting);


// //substrin


$name="Lovely professional university";
echo "The name of the student is ".$name;
echo "<br>";
echo "<br>";
echo "The word count is ".str_word_count($name);
echo "<br>";
echo "<br>";
echo str_replace("Lovely","satya",$name);
echo "<br>";
echo "<br>";
echo "The length of the string is.".strlen($name);
echo "<br>";
echo "<br>";
echo "The repeat of the string is".str_repeat($name,5);
echo "<br>";
echo "<br>";
echo "<pre>";
echo rtrim("    welcome to lpu   ");
echo "</pre>";
echo "<pre>";
echo ltrim("    welcome to lpu   ");
echo "</pre>";
?>
