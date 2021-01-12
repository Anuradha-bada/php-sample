<?php
include 'config.php';
echo "printing variabe1&nbsp&nbsp" . $var1;
echo "</br>";
echo "printing variable2&nbsp&nbsp" . $var2 . "</br>";
#echo " DEVOPS ";
#echo "getenv("$var3")";
echo "overrided value of variable2&nbsp&nbsp&nbsp&nbsp" . getenv("var2");
