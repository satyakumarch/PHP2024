<?php

// $fruit=array("mango","apple","orange");
// foreach($fruit as $value){
//     echo "$value</br>";
// }

$student=array(
    "name"=>"kishav",
    "gmail"=>"kishav@gamil.com",
    "age"=>23
);
foreach($student as $key=>$value){
    echo $key. ":" .$value."<br>";
}
?>