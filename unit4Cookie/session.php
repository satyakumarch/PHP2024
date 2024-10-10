<?php
session_start();

$_SESSION['id'] = "1234556";
$_SESSION['name'] = 'satya kumar chaudhary';
echo "<br>";
echo 'The id of the session is: ' . $_SESSION['id'] . '<br>';
echo "<br>";
echo 'The name of the session is: ' . $_SESSION['name'] . '<br>';
?>
// $_SESSION[''] = "John Watkin";
// echo "<br>";
// if(isset($_SESSION['testSession'])){
//     echo $_SESSION['testSession'];
// }else{
//     echo "Session testSession is not set";
// }
?>
