<!DOCTYPE html>
<html>
<body>
<pre>
<?php
$a = 2024;       // Integer
$b = 20.24;    // Float
$c = "24 days"; // String
$d = "day 24"; // String
$e = "DAY"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 
</pre>
<p>Note that when casting a string that starts with a number, 
    the (int) function uses that number. If it does not start with a number, 
    the (int) function convert strings into the number 0.</p>
</body>
</html>
