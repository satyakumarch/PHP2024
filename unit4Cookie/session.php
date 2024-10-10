<?php
session_start();
echo "The id of the session is:".session_id();
$_SESSION[''] = "John Watkin";
echo "<br>";
if(isset($_SESSION['testSession'])){
    echo $_SESSION['testSession'];
}else{
    echo "Session testSession is not set";
}
?>