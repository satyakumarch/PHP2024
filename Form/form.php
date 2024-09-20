<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=htmlspecialchars($_POST['name']);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<h2> Thank you, $name!</h2>";
        echo "<p> your email <strong> $email</strong> has been successfully recorded.</p>";
    }else{
        echo "<h2> invalid email foramt</h2>";

    }

}else{
    echo "<h2> No form data submitted </h2>";
}
?>