<?php
include 'config.php';
echo "printing variabe1&nbsp&nbsp" . $var1;
echo "</br>";
echo "printing variable2&nbsp&nbsp" . $var2 . "</br>";
#echo " DEVOPS ";
#echo "getenv("$var3")";
echo getenv("var1");
echo "</br>";
echo getenv("var2");
