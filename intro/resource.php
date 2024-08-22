<?php
$file=fopen("resource.txt","r");

if($file){
    echo "File opened successfully";
    fclose($file);
}else{
    echo "Failed to open the file";
}

?>
