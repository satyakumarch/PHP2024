<?php
setcookie("theme", "dark", time() + 3600, "/");
setcookie("language", "en", time() + 3600, "/");
echo "Theme: " . $_COOKIE['theme'] . "<br>Language: " . $_COOKIE['language'];
?>
