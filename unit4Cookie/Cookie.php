<?php
setcookie("name", "John Watkin", time() + 3600, "/","", 0);

if(isset($_COOKIE['testCookie'])){
    echo $_COOKIE['testCookie'];
}else{
    echo "Cookie testCookie is not set";
}

setcookie("testCookie", "Bob", time() + 3600, "/");

if(isset($_COOKIE['testCookie'])){
    echo "modified user: " . $_COOKIE['testCookie'];
} else {
    echo "Cookie testCookie is not set";
}
?>