<?php
function mycofee(type="coffee"){
    return "My coffee is:$type";
}
echo mycofee();
echo mycofee(null);
echo mycofee("chai");

