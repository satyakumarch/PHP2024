<?php
// $books=array("ram","shyam","mohan");
// echo $books[0];

// echo $books[1];
// echo $books[2];


$result=array(
    array('name'=>"manoj",'cgpa'=>7.7,'status'=>"Pass"),
    array('name'=>"Avinandan",'cgpa'=>8.78,'status'=>"pass"),
    array('name'=>"shyam",'cgpa'=>3.78,'status'=>"fail"),
    array('name'=>"avinash",'cgpa'=>0.78,'status'=>"pass"),
    array('name'=>"mahendra",'cgpa'=>9.78,'status'=>"fail"),



    
);
$names=array_column($result,'status','name');
print_r($names);

?>