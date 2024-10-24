<?php
setcookie("username", "John Carter", time() + 86400*30, "/");
if (isset($_COOKIE["username"])) {
    echo "Hello, " . $_COOKIE["username"];
} else {
    echo "Cookie is not set!";
}
?>
