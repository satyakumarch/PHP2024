<?php
setcookie("testCookie", "John Carter", time() + 86400*30, "/");
if (isset($_COOKIE['testCookie'])) {
  echo $_COOKIE['testCookie'];
} else {
  echo "Cookie testCookie is not set.";
} 
setcookie("testCookie", "Bob", time() + 3600, "/");
echo "Modified User: " . $_COOKIE['testCookie'];
?>
